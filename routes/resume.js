var express = require('express');
var router  = express.Router();
var contact = require('./contact');

router.get('/', function(req, res) {
    res.render('resume');
});

router.post('/', function(req, res) {
    contact.contactMe(req, res, 'resume');
});

module.exports = router;
