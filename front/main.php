<style>

.tags{
    display:flex;
    margin-left:1px; 
}
.tags li{
    list-style:none ;
    padding:5px;
    width:100px;
    border:1px solid #666;
    text-align: center;
    margin-left:-1px;
    cursor: pointer;
    background:#eee;

}
.tags li.active{
    background:white;
}
</style>
<ul class="tags">
    <li class="tag active">健康新知</li>
    <li class="tag">菸害防制</li>
    <li class="tag">癌症防治</li>
    <li class="tag">慢性病防治</li>
</ul>
<div class="articles">
    <div class="article">
        <h2>健康新知</h2>
        <pre>

        </pre>
    </div>
    <div class="article">
        <h2>菸害防制</h2>
        <pre>

        </pre>
    </div>
    <div class="article">
        <h2>癌症防治</h2>
        <pre>

        </pre>
    </div>
    <div class="article">
        <h2>慢性病防治</h2>
        <pre>

        </pre>
    </div>
</div>
<script>
$(".tag").on("click",function(){
    $(".tag").removeClass("active")
    $(this).addClass("active")
})
</script>