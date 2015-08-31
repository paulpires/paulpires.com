var express    = require('express');
var router     = express.Router();
var validator  = require('validator');
var nodemailer = require('nodemailer');

var error          = false;
var emailSent      = false;
var contactName    = '';
var contactEmail   = '';
var contactMessage = '';
var emailInvalid   = false;

router.get('/', function(req, res) {
  res.render('index', {
    error         : error,
    emailInvalid  : emailInvalid,
    emailSent     : emailSent,
    contactName   : contactName,
    contactEmail  : contactEmail,
    contactMessage: contactMessage
  });
});

router.post('/', function(req, res) {

  error          = false;
  emailSent      = false;
  contactName    = req.body.contactName;
  contactEmail   = req.body.contactEmail;
  contactMessage = req.body.contactMessage;
  emailInvalid   = !validator.isEmail(contactEmail);

  if (emailInvalid || contactName.trim().length == 0 || contactMessage.trim().length == 0) {
    error = true;
  }

  if (!error && !emailInvalid) {

    sendEmail(contactName, contactEmail, contactMessage, function(emailSent) {

      if (emailSent) {
        contactName    = '';
        contactEmail   = '';
        contactMessage = '';
      }

      res.render('index', {
        error         : error,
        emailInvalid  : emailInvalid,
        emailSent     : emailSent,
        contactName   : contactName,
        contactEmail  : contactEmail,
        contactMessage: contactMessage
      });
    });

  } else {

    res.render('index', {
      error         : error,
      emailInvalid  : emailInvalid,
      emailSent     : emailSent,
      contactName   : contactName,
      contactEmail  : contactEmail,
      contactMessage: contactMessage
    });
  }

});

function sendEmail(contactName, contactEmail, contactMessage, callback) {

  var transporter = nodemailer.createTransport();

  transporter.sendMail({

    from   : contactEmail,
    to     : 'paulpires101@gmail.com',
    subject: 'PAULPIRES.COM - Email from ' + contactName,
    text   : contactMessage
  }, function(error, info) {

    if (error) {
      console.log("Error sending email: " + JSON.stringify(error));
      callback(false);
    }
    console.log("Message sent! Info: " + JSON.stringify(info));
    callback(true);
  });
};

module.exports = router;
