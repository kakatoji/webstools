function fungsi(e) {
    var n = e.target.files[0],
        t = new FileReader();
    (t.onload = function (e) {
        var kakatoji = document.getElementById("area");
        (kakatoji.style.display = "block"),
            (kakatoji.value = e.target.result);
    }),
        t.readAsBinaryString(n);
}
window.File && window.FileReader && window.FileList && window.Blob
    ? document.getElementById("files").addEventListener("change", fungsi, !1)
    : alert("The File APIs are not fully supported in this browser.");


const popover = new bootstrap.Popover('.popover-dismiss', {
  trigger: 'focus'
})

/* <![CDATA[ */
/*function open_popup() {
window.open("https://click.a-ads.com/2351446/99079/")
window.open("https://click.a-ads.com/2351446/158410/")
window'op3n("https://click.a-ads.com/2351446/187070/")
window.open("https://a-ads.com?partner=2351446/")
}*/
/* ]]> */

//eksekusi ads di star obf
function showAds(){
    let linkx = ["https://click.a-ads.com/2351446/99079/","https://click.a-ads.com/2351446/158410/","https://click.a-ads.com/2351446/187070/"];
    let kings = linkx[Math.floor(Math.random() * linkx.length)];
    var php = '<?php $m = ["https://click.a-ads.com/2351446/99079/","https://click.a-ads.com/2351446/158410/","https://click.a-ads.com/2351446/187070/"];$c=array_rand($m);echo $m[$c];?>';
    window.open(php,"_blank");
}
