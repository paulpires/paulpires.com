var express = require('express');
var router  = express.Router();

router.get('/', function(req, res) {
  res.render('index');
})

router.get('/cv', function(req, res) {
  res.render('cv')
})

router.get('/resume', function(req, res) {
  res.render('cv')
})

module.exports = router;
