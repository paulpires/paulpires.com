var express = require('express');
var router  = express.Router();
var contact = require('./contact');

router.get('/', function(req, res) {
    res.render('resume');
});

module.exports = router;
