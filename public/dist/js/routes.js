app.get('/', function (req, res) {
  res.sendFile(__dirname + '/index.php')
})
app.get('/admin/questions', function (req, res) {
  res.sendFile(__dirname + '/?page=questions')
})