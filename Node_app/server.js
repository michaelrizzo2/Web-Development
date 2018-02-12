
var route=require("./router")
var http=require("http");
var url=require("url");
function start(route,handle)
{
    function onRequest(request,response)
    {
        //adding logic to get proper url pathname
        var pathname=url.parse(request.url).pathname;
        console.log("Request for  "+pathname+" Received")
        route(handle,pathname,response)
    }



http.createServer(onRequest).listen(8888);
console.log("Server has Started")

}

exports.start=start;