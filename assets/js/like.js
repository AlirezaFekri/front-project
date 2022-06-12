<<<<<<< HEAD
const toggleLike = document.querySelectorAll('.btn-like .like');
=======
const toggleLike = document.querySelectorAll('.btn .like');
>>>>>>> 6ac56a4d18c7df1b46117dd2ef69165aedfefd27
for (const item of toggleLike) {
    let likeButton = item.closest(".btn");
    likeButton.addEventListener("click", likeButtonIcon)
}
function likeButtonIcon(e){
    e.preventDefault();//از هر رویدادی جلو گیری میکند مثلا نمیگذارد تگ آ صفحه را هدایت کند.
    let icon = this.querySelector(".fa-heart")
<<<<<<< HEAD
    
    fetch('./like.php')
=======
    let url = this.href;
    fetch(url)
>>>>>>> 6ac56a4d18c7df1b46117dd2ef69165aedfefd27
    .then(
        function (response) {
        return response.text();
    })
    .then(
        function(data) {
            if (data === "like") {
                icon.classList.remove('fa-regular');
                icon.classList.add('fa-solid');
            }else if(data === "dislike"){
                icon.classList.remove('fa-solid');
                icon.classList.add('gang')
                icon.classList.add('fa-regular');
            }
        }
    )
    .catch(error => {
        console.log(error)
    })

}
