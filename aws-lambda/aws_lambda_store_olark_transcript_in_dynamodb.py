from __future__ import print_function

import boto3
import json
import time
import urlparse


def lambda_handler(event, context):
    '''Store Olark transcripts in a DynamoDB instance.'''
    payload = json.loads(urlparse.parse_qs(event['body'])['data'][0])

    # find the start time of the conversation
    start_timestamp = int(time.time())

    for event in payload['items']:
        try:
            start_timestamp = min(start_timestamp, int(float(event['timestamp'])))
        except KeyError:
            pass

    # the sample table we are using has id as the partition key and
    # start_timestamp as the primary sort key
    payload['start_timestamp'] = start_timestamp
    table = boto3.resource('dynamodb').Table('olark')
    table.put_item(Item=payload)

    return {
        'statusCode': '200',
        # the integrationUrl here will be sent to operators if they
        # used !trigger, !case or !lead
        'body': json.dumps({'integrationUrl': 'https://www.olark.com'}),
        'headers': {
            'Content-Type': 'application/json',
        },
    }
