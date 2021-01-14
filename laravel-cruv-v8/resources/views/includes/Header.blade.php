<!-- Nav tabs -->
<ul class="nav nav-tabs bg-secondary" id="navId">
    <div class="nav-item">
        <a href="/products"><h1 class="text-white">Products</h1></a>
    </div>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>


<a href="/products/create" class="nav-item btn btn-info my-2 mx-5 text-left">Add Product</a>
 
<script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
</script>