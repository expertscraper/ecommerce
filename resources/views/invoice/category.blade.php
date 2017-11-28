@extends('layouts.master')

@section('content')
<div>
                    

<input name="__RequestVerificationToken" type="hidden" value="m5XmDJ3Q5SBCUoazYE9z0NokhraOMAl443DgtQQoqSys3VENDbuhk35C8DvuHBHfkSpj4e6Pjfa9vF3GBoAzJ8q-_A-Qj11rxeW_4RAFDvE-X00d0">
<div class="content-header clearfix">
    <h1 class="pull-left">
        Manage Categories
    </h1>
    <div class="pull-right">
        <a href="/Admin/Category/Create" class="btn bg-blue">
            <i class="fa fa-plus-square"></i>
            Add new
        </a>
        <div class="btn-group">
            <button type="button" class="btn btn-success">
                <i class="fa fa-download"></i>
                Export
            </button>
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">&nbsp;</span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="/Admin/Category/ExportXml">
                        <i class="fa fa-file-code-o"></i>
                        Export to XML
                    </a>
                </li>
                <li>
                    <a href="/Admin/Category/ExportXlsx">
                        <i class="fa fa-file-excel-o"></i>
                        Export to Excel
                    </a>
                </li>
            </ul>
        </div>
        <button type="button" name="importexcel" class="btn bg-olive" data-toggle="modal" data-target="#importexcel-window">
            <i class="fa fa-upload"></i>
            Import
        </button>
    </div>
</div>

<div class="content">
    <div class="form-horizontal">
        <div class="panel-group">
            <div class="panel panel-default panel-search">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="control-label" for="SearchCategoryName" title="">Category name</label><div class="ico-help" title="A category name."><i class="fa fa-question-circle"></i></div></div>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control text-box single-line" id="SearchCategoryName" name="SearchCategoryName" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="control-label" for="SearchStoreId" title="">Store</label><div class="ico-help" title="Search by a specific store."><i class="fa fa-question-circle"></i></div></div>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" data-val="true" data-val-number="The field Store must be a number." id="SearchStoreId" name="SearchStoreId"><option selected="selected" value="0">All</option>
<option value="1">Your store name</option>
<option value="2">Test store 2</option>
</select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="button" id="search-categories" class="btn btn-primary btn-search"><i class="fa fa-search"></i>Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="categories-grid" data-role="grid" class="k-grid k-widget"><table role="grid"><colgroup><col><col style="width:100px"><col style="width:150px"><col style="width:100px"></colgroup><thead class="k-grid-header" role="rowgroup"><tr role="row"><th role="columnheader" data-field="Breadcrumb" data-title="Name" class="k-header">Name</th><th role="columnheader" data-field="Published" data-title="Published" style="text-align:center" class="k-header">Published</th><th role="columnheader" data-field="DisplayOrder" data-title="Display order" class="k-header">Display order</th><th role="columnheader" data-field="Id" data-title="Edit" style="text-align:center" class="k-header">Edit</th></tr></thead><tbody role="rowgroup"><tr data-uid="ff769cc3-d8bf-465d-972d-c79acf1e35f3" role="row"><td role="gridcell">Computers</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">1</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/1"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr class="k-alt" data-uid="e7436bb7-5636-48ad-915e-753eb89ac6ea" role="row"><td role="gridcell">Computers &gt;&gt; Desktops</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">1</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/2"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr data-uid="9eb2cf1c-09f2-4e60-b700-e20344b6bfd5" role="row"><td role="gridcell">Computers &gt;&gt; Notebooks</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">2</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/3"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr class="k-alt" data-uid="e6a9b0e2-8aa4-4e67-b7c6-d12586719582" role="row"><td role="gridcell">Computers &gt;&gt; Software</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">3</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/4"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr data-uid="8338b411-ccd0-402a-b4cf-e998d7fe073a" role="row"><td role="gridcell">Electronics</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">2</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/5"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr class="k-alt" data-uid="9d06f3ff-0f45-49ac-bdfd-8cdd8ca94098" role="row"><td role="gridcell">Electronics &gt;&gt; Camera &amp; photo</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">1</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/6"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr data-uid="f319dfd2-252e-41f1-a8aa-b8132dbcd1e0" role="row"><td role="gridcell">Electronics &gt;&gt; Cell phones</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">2</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/7"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr class="k-alt" data-uid="dbcca813-1ccf-42f7-ac22-e224a7e6ff31" role="row"><td role="gridcell">Electronics &gt;&gt; Others</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">3</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/8"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr data-uid="88e69fcf-36be-45b5-8064-4f2ce0da7205" role="row"><td role="gridcell">Electronics &gt;&gt; Mobile</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">5</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/17"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr class="k-alt" data-uid="a67a5ff2-6bc9-4484-aec4-ce654812f1e2" role="row"><td role="gridcell">Apparel</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">3</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/9"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr data-uid="25624ddc-8c75-4a6d-8d18-2d0a15c99501" role="row"><td role="gridcell">Apparel &gt;&gt; Shoes</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">1</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/10"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr class="k-alt" data-uid="f6d5f26d-345e-4284-8fdd-27ffed6a76cd" role="row"><td role="gridcell">Apparel &gt;&gt; Clothing</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">2</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/11"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr data-uid="ce710d5f-4f9b-45e9-a563-6b50fb09b502" role="row"><td role="gridcell">Apparel &gt;&gt; Accessories</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">3</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/12"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr class="k-alt" data-uid="c9ce6c11-d50a-4949-9e7e-8b6632af7092" role="row"><td role="gridcell">Digital downloads</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">4</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/13"><i class="fa fa-pencil"></i>Edit</a></td></tr><tr data-uid="90d6228b-ec88-437e-8227-f1ea6ef95779" role="row"><td role="gridcell">Books</td><td style="text-align:center" role="gridcell"> <i class="fa fa-check true-icon"></i> </td><td role="gridcell">5</td><td style="text-align:center" role="gridcell"><a class="btn btn-default" href="Edit/14"><i class="fa fa-pencil"></i>Edit</a></td></tr></tbody></table><div class="k-pager-wrap k-grid-pager k-widget" data-role="pager"><a href="#" title="Go to the first page" class="k-link k-pager-nav k-pager-first k-state-disabled" data-page="1" tabindex="-1"><span class="k-icon k-i-seek-w">Go to the first page</span></a><a href="#" title="Go to the previous page" class="k-link k-pager-nav  k-state-disabled" data-page="1" tabindex="-1"><span class="k-icon k-i-arrow-w">Go to the previous page</span></a><ul class="k-pager-numbers k-reset"><li><span class="k-state-selected">1</span></li><li><a tabindex="-1" href="#" class="k-link" data-page="2">2</a></li></ul><a href="#" title="Go to the next page" class="k-link k-pager-nav" data-page="2" tabindex="-1"><span class="k-icon k-i-arrow-e">Go to the next page</span></a><a href="#" title="Go to the last page" class="k-link k-pager-nav k-pager-last" data-page="2" tabindex="-1"><span class="k-icon k-i-seek-e">Go to the last page</span></a><span class="k-pager-sizes k-label"><span class="k-widget k-dropdown k-header" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="" aria-disabled="false" aria-readonly="false" aria-busy="false" style=""><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input">15</span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select data-role="dropdownlist" style="display: none;"><option value="10">10</option><option value="15" selected="selected">15</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select></span>items per page</span><a href="#" class="k-pager-refresh k-link" title="Refresh"><span class="k-icon k-i-refresh">Refresh</span></a><span class="k-pager-info k-label">1 - 15 of 17 items</span></div></div>

                    <script>
                        $(document).ready(function() {
                            $("#categories-grid").kendoGrid({
                                dataSource: {
                                    type: "json",
                                    transport: {
                                        read: {
                                            url: "/Admin/Category/List",
                                            type: "POST",
                                            dataType: "json",
                                            data: additionalData
                                        }
                                    },
                                    schema: {
                                        data: "Data",
                                        total: "Total",
                                        errors: "Errors"
                                    },
                                    error: function(e) {
                                        display_kendoui_grid_error(e);
                                        // Cancel the changes
                                        this.cancelChanges();
                                    },
                                    pageSize: 15,
                                    serverPaging: true,
                                    serverFiltering: true,
                                    serverSorting: true
                                },
                                pageable: {
                                    refresh: true,
                                    pageSizes: [10, 15, 20, 50, 100],
                                    messages: {
    display: "{0} - {1} of {2} items",
    empty: "No items to display",
    page: "Page",
    of: "of {0}",
    itemsPerPage: "items per page",
    first: "Go to the first page",
    previous: "Go to the previous page",
    next: "Go to the next page",
    last: "Go to the last page",
    refresh: "Refresh",
    allPages: "All",
    morePages: "More pages"
}
                                },
                                editable: {
                                    confirmation: "Are you sure you want to delete this item?",
                                    mode: "inline"
                                },
                                scrollable: false,
                                columns: [
                                    {
                                        field: "Breadcrumb",
                                        title: "Name"
                                    }, {
                                        field: "Published",
                                        title: "Published",
                                        width: 100,
                                        headerAttributes: { style: "text-align:center" },
                                        attributes: { style: "text-align:center" },
                                        template: '# if(Published) {# <i class="fa fa-check true-icon"></i> #} else {# <i class="fa fa-close false-icon"></i> #} #'
                                    }, {
                                        field: "DisplayOrder",
                                        title: "Display order",
                                        width: 150
                                    }, {
                                        field: "Id",
                                        title: "Edit",
                                        width: 100,
                                        headerAttributes: { style: "text-align:center" },
                                        attributes: { style: "text-align:center" },
                                        template: '<a class="btn btn-default" href="Edit/#=Id#"><i class="fa fa-pencil"></i>Edit</a>'
                                    }
                                ]
                            });
                        });
                    </script>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            //search button
                            $('#search-categories').click(function() {
                                //search
                                var grid = $('#categories-grid').data('kendoGrid');
                                grid.dataSource.page(1); //new search. Set page size to 1
                                //grid.dataSource.read(); we already loaded the grid above using "page" function
                                return false;
                            });

                            $("#SearchCategoryName").keydown(function(event) {
                                if (event.keyCode == 13) {
                                    $("#search-categories").click();
                                    return false;
                                }
                            });
                        });

                        function additionalData() {
                            var data = {
                                SearchCategoryName: $('#SearchCategoryName').val(),
                                SearchStoreId: $('#SearchStoreId').val()
                            };
                            addAntiForgeryToken(data);
                            return data;
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="importexcel-window" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="importexcel-window-title">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="importexcel-window-title">Import from Excel</h4>
            </div>
<form action="/Admin/Category/ImportFromXlsx" enctype="multipart/form-data" method="post" novalidate="novalidate">                <div class="form-horizontal">
                    <div class="modal-body">
                        <input name="__RequestVerificationToken" type="hidden" value="LnyI4L3glsy_QOThJiRZZ_FvRQdA5pw17EQold-JDf_VznDfPNf5nt9SVSJxpMnkPDSyihiB93u-JRz1NDCTyCwmtDzmWunKHFSbvMvj3pBvDuc50">
                        <ul class="common-list">
                            <li>
                                <em>Imported categories are distinguished by ID. If the ID already exists, then its corresponding category will be updated. You should not specify ID (leave 0) for new categories.</em>
                            </li>
                            <li>
                                <em>Import requires a lot of memory resources. That's why it's not recommended to import more than 500 - 1,000 records at once. If you have more records, it's better to split them to multiple Excel files and import separately.</em>
                            </li>
                        </ul>
                        <div class="form-group">
                            <div class="col-md-2">
                                <div class="label-wrapper">
                                    <label class="control-label">
                                        Excel file
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <input type="file" id="importexcelfile" name="importexcelfile" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Import from Excel
                        </button>
                    </div>
                </div>
</form>        </div>
    </div>
</div>
                </div>


@endsection