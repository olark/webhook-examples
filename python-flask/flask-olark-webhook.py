from flask import Flask, request
import urllib
import json

app = Flask(__name__)


@app.route("/olarkwebhook", methods=['POST'])
def olarkwebhook():
    payload = json.loads(request.form['data'])
    print payload
    # the integrationUrl here will be sent to operators if they
    # used !trigger, !case or !lead
    return json.dumps({'integrationUrl': 'https://myservice.com/uniqueidfortranscript'})

if __name__ == "__main__":
    app.run()
