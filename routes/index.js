var express = require('express');
var router = express.Router();

router.get('/', function(req, res) {

  console.log("here I am on the home page")

  res.render('index', { title: 'Paul Pires' });
});

module.exports = router;
