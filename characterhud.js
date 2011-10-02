GLOBAL.DEBUG = true;

sys = require("util");
test = require("assert");


var mongodb = require('/home/damanar/local/node_modules/mongodb').Db;
var con = require('/home/damanar/local/node_modules/mongodb').Connection;
var ms = require('/home/damanar/local/node_modules/mongodb').Server;

var host = process.env['MONGO_NODE_DRIVER_HOST'] != null ? process.env['MONGO_NODE_DRIVER_HOST'] : 'localhost';
var port = process.env['MONGO_NODE_DRIVER_PORT'] != null ? process.env['MONGO_NODE_DRIVER_PORT'] : con.DEFAULT_PORT;

sys.puts("Connecting to " + host + ":" + port);

var db = new mongodb('test', new ms(host, port, {}), {});

db.open(function(err, db) {
  //Fetch the collection
  db.collection('things', function(err, collection) {
    //Count the number of documents
    collection.count(function(err, count) {
      sys.puts("There are " + count + " records.");
    });

    //Find all records
    collection.find(function(err, cursor){
      cursor.toArray(function(err, docs) {
        docs.forEach(function(doc) {
          sys.puts("Doc from Array " + sys.inspect(doc));
          db.close();
        });
      });
    });
  });
});
