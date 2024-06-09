<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.user.title')}}</h2>
        <ol class="breadcrumb" style="margin-bottom:10px;"> 
            <li>
                <a href="{{ route('dashboard.index')}}">Dashboard</a>
            </li>
            <li class="active">
                <strong>{{ config('apps.user.title')}}</strong>
            </li>
        </ol>
    </div>
</div>

<div class="row mt20">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>{{config('apps.user.tableHeading')}}</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="filter">
                <div class="perpage"></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>
                        <input type="checkbox" value="" id='checkAll' class="input-text" >
                    </th>
                    <th>Họ và Tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th class="text=center">Tình trạng</th>
                    <th class="text=center">Thao tác</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input type="checkbox" value="" id='checkAll' class="input-text checkBoxItem" >

                    </td>
                    
                    <td>
                        NDN
                    </td>
                    <td>
                       kocoten001a@gmail.com
                    </td>
                    <td>
                        12344534635
                     </td>
                     <td>
                        347, Hà Nội, Việt Nam
                     </td>
                    <td class="text-center">
                        <input type="checkbox" class="js-switch" checked />
                    </td>
                    <td class="text-center">
                        <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>

                    </td>
                </tr>
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>



<script>
    $(document).ready(function(){
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, {color:'#1AB394'});
    })
</script>