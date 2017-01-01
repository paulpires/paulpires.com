var express = require('express');
var router  = express.Router();
var contact = require('./contact');

router.get('/', function(req, res) {
  res.render('index');
})

router.get('/cv', function(req, res) {
  res.render('cv')
})

module.exports = router;
