
var route=require("./router")
var http=require("http");
var url=require("url");
function start(route,handle)
{
    function onRequest(request,response)
    {
        //adding logic to get proper url pathname
        var postdata=""
        var pathname=url.parse(request.url).pathname;
        console.log("Request for  "+pathname+" Received")
        request.setEncoding("utf8")

        request.addListener("data",function(postDataChunk)
        {
       postdata+=postDataChunk
       console.log("Recieved post data chunk of "+postDataChunk)
        } 
      
    )

    request.addListener("end",function()
    { 
        route(handle,pathname,response,postdata)
    }) 


    }



http.createServer(onRequest).listen(8888);
console.log("Server has Started")

}

exports.start=start;