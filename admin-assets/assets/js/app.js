// replace these values with those generated in your TokBox Account
var apiKey = "46357142";
var sessionId = "1_MX40NjM1NzE0Mn5-MTU2MjY4NTM1MzEyNX53RGxneXFKNFQ0dzJQRFdhVEl6VnFkbll-fg";
var token = "T1==cGFydG5lcl9pZD00NjM1NzE0MiZzaWc9N2RhNjdjMjQ5NzAzZGJiNzQ2YzM3MTNjYzMyNWExMmM2YzZjMGE0MjpzZXNzaW9uX2lkPTFfTVg0ME5qTTFOekUwTW41LU1UVTJNalk0TlRNMU16RXlOWDUzUkd4bmVYRktORlEwZHpKUVJGZGhWRWw2Vm5Ga2JsbC1mZyZjcmVhdGVfdGltZT0xNTYyNjg1Mzk5Jm5vbmNlPTAuNzMzMDA2MDI0MzQxOTIzNiZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNTYyNjg4OTk3JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";

// Handling all of our errors here by alerting them
function handleError(error) {
  if (error) {
    alert(error.message);
  }
}

// (optional) add server code here
initializeSession();

function initializeSession() {
  var session = OT.initSession(apiKey, sessionId);

  // Subscribe to a newly created stream
  session.on('streamCreated', function(event) {
    session.subscribe(event.stream, 'subscriber', {
      insertMode: 'append',
      width: '100%',
      height: '100%'
    }, handleError);
  });

  // Create a publisher
  var publisher = OT.initPublisher('publisher', {
    insertMode: 'append',
    width: '100%',
    height: '100%'
  }, handleError);

  // Connect to the session
  session.connect(token, function(error) {
    // If the connection is successful, initialize a publisher and publish to the session
    if (error) {
      handleError(error);
    } else {
      session.publish(publisher, handleError);
    }
  });
}