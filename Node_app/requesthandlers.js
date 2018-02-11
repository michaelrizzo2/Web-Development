function start()
{
    console.log("Request Handler 'start' was started")
    return "Hello Start"
}

function upload()
{
    console.log("Request handler 'upload' was called")
    return "Hello Upload"
}

exports.start=start
exports.upload=upload