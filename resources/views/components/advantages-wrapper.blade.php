<style>
.advantage-title span {
  color: #fff;
  font-weight: 300;
  margin-bottom: 10px;
}
.advantage-title {
  font-size: 4.4em;
  line-height: 1;
  padding: 24px 0;
  background: linear-gradient(to right,rgb(138 138 138/50%) 0%,rgb(156 156 156) 100%),url(assets/svg/patron2.svg) center/cover no-repeat;
}
.arrow-directions .horizon-prev, button .btn .btn-md .shadow-sm {
  background: #EDBF00;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

.arrow-directions .horizon-next {
    background: #efc100;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

.arrow-directions {
  position: absolute;
  display: flex;
  justify-content: space-between;
  margin-top: 31.5px;
  left: 0;
  right: 0;
  z-index: 2;
}
.arrow-directions .horizon-prev:hover{
    background: #efc100;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    padding-left: 24px;
    transition: ease-in .4s;
}

.arrow-directions .horizon-next:hover {
    background: #efc100;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    padding-right: 24px;
    transition: ease-in .4s;
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}
</style>
<section class="advantage-new">
    <div class="advantage-title">
        <div class="container">
            <span class="advantage-title-content">Get to know our<br><strong>30 advantages</strong></span>
        </div>
    </div>
    <div class="hl-advantage"></div>
    <div>
        <x-advantages/>
    </div>
</section>