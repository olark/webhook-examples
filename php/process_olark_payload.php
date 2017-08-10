<?php header('Content-type: application/json');

$payload = json_decode($_POST['data'], true);

// Process the payload here

/*
Here is the var_dump of our test transcript:

array(6) {
  ["kind"]=>
  string(12) "Conversation"
  ["tags"]=>
  array(1) {
    [0]=>
    string(12) "test_example"
  }
  ["items"]=>
  array(2) {
    [0]=>
    array(5) {
      ["body"]=>
      string(19) "Hi from an operator"
      ["timestamp"]=>
      string(17) "1473774819.263083"
      ["kind"]=>
      string(16) "MessageToVisitor"
      ["nickname"]=>
      string(14) "Olark operator"
      ["operatorId"]=>
      string(6) "828848"
    }
    [1]=>
    array(5) {
      ["body"]=>
      string(17) "Hi from a visitor"
      ["timestamp"]=>
      string(17) "1473774821.411154"
      ["kind"]=>
      string(17) "MessageToOperator"
      ["nickname"]=>
      string(49) "Returning Visitor | USA (San Francisco, CA) #7617"
      ["visitor_nickname"]=>
      string(13) "Olark Visitor"
    }
  }
  ["operators"]=>
  array(1) {
    [828848]=>
    array(5) {
      ["username"]=>
      string(13) "dan.bravender"
      ["emailAddress"]=>
      string(17) "dan@bravender.net"
      ["kind"]=>
      string(8) "Operator"
      ["nickname"]=>
      string(2) "77"
      ["id"]=>
      string(6) "828848"
    }
  }
  ["visitor"]=>
  array(16) {
    ["city"]=>
    string(13) "San Francisco"
    ["kind"]=>
    string(7) "Visitor"
    ["organization"]=>
    string(20) "Visitor Organization"
    ["conversationBeginPage"]=>
    string(20) "http://www.olark.com"
    ["countryCode"]=>
    string(2) "US"
    ["referrer"]=>
    string(20) "http://www.olark.com"
    ["ip"]=>
    string(9) "127.0.0.1"
    ["region"]=>
    string(2) "CA"
    ["chat_feedback"]=>
    array(4) {
      ["overall_chat"]=>
      int(4)
      ["responsiveness"]=>
      int(5)
      ["friendliness"]=>
      int(5)
      ["knowledge"]=>
      int(4)
    }
    ["operatingSystem"]=>
    string(7) "Windows"
    ["emailAddress"]=>
    string(33) "support+integrationtest@olark.com"
    ["country"]=>
    string(13) "United States"
    ["phoneNumber"]=>
    string(10) "5555555555"
    ["fullName"]=>
    string(5) "Olark"
    ["id"]=>
    string(32) "NOTAREALVISITORIDS5LGl6QUrK2OaPP"
    ["browser"]=>
    string(20) "Internet Explorer 11"
  }
  ["id"]=>
  string(32) "NOTAREALTRANSCRIPT5LGcbVTa3hKBRB"
}
*/

// If you have an issue processing the result raise a non-2xx
// response and we will retry a few times with back off

// the integrationUrl returned in a valid JSON response will be sent to
// operators if they used !trigger, !case or !lead

?>
{"integrationUrl": "http://anintegrationurlhasappeared.notreal.com"}
