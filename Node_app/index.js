var server=require("./server");
var route=require("./router")
var requesthandler=require("./requesthandlers")

var handle={}
handle["/"]=requesthandler.start
handle["/start"]=requesthandler.start
handle["/upload"]=requesthandler.upload
server.start(route.route,handle)