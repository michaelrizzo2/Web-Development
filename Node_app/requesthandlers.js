var exec=require("child_process").exec

function start()
{
    console.log("Request Handler 'start' was started")
    var content="empty"
    exec("ls -lah ",function(error,stdout,stderr){content=stdout})
    return content
}

function upload()
{
    console.log("Request handler 'upload' was called")
    return "Hello Upload"
}

exports.start=start
exports.upload=upload