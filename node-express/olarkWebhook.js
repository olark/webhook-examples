var request = require("request");

var webhook = function(req, res)
{
  var webhookPayload = JSON.parse(req.body.data);
  console.log(webhookPayload);
  // TODO:
  // Process the webhook data somehow
  res.end();
};


module.exports = {
  webhook
};
