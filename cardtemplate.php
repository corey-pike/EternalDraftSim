<style>
.outsideWrapper{ 
    width:256px; height:256px; 
    margin:20px 60px; 
    border:1px solid blue;}
.insideWrapper{ 
    width:100%; height:100%; 
    position:relative;}
.coveredImage{ 
    width:100%; height:100%; 
    position:absolute; top:0px; left:0px;
}
.coveringCanvas{ 
    width:100%; height:100%; 
    position:absolute; top:0px; left:0px;
    background-color: rgba(255,0,0,.1);
}
</style>
<div class="outsideWrapper">
    <div class="insideWrapper">
        <img src="/images/eternal_.png" class="coveredImage">
        <canvas class="coveringCanvas"></canvas>
    </div>
</div>