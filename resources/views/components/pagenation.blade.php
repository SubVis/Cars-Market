<!-- Start Pagenation -->
<div class="flex page justify-center my-6 ">
    {{$cars->links()}}
</div>
<!-- End Pagenation -->

<style>
.page nav {
    background: transparent
}
.page-item a,.page-item span, .page-item.active span{
    display: block;
    padding: 0.5rem 0.75rem;
    color: black;
}

.page-item.disabled{
    background-color: #eee;
    cursor: not-allowed;
}

.page-item{
    border: 1px solid #eee;
    display: inline-block;
    margin: 0
}
.page-item.active span{
    background-color: #7420a3;
    color: #fff;
}

</style>