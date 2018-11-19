<script src="https://oss.simright.com/static/jquery.min.js"></script>
<script>
window.onload = function () {
    window.addEventListener('message', function(e){
        var height = document.body.clientHeight;
        e.source.postMessage({"height":height}, '*');
        $('.video-item').on('click',function(ele){
            e.source.postMessage({"href":$(this).data('href')}, '*');
        })
    }, false);
}
</script>
