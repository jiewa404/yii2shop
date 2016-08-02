 <!-- main container -->
        <div class="content">
            <div class="container-fluid">
                <div id="pad-wrapper" class="users-list">
                    <div class="row-fluid header">
                        <h3>管理员列表</h3>
                        <div class="span10 pull-right">
                            <a href="/index.php?r=admin%2Fmanage%2Freg" class="btn-flat success pull-right">
                                <span>&#43;</span>添加新管理员</a></div>
                    </div>
                    <!-- Users table -->
                    <div class="row-fluid table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">管理员ID</th>
                                    <th class="span2">
                                        <span class="line"></span>管理员账号</th>
                                    <th class="span2">
                                        <span class="line"></span>管理员邮箱</th>
                                    <th class="span3">
                                        <span class="line"></span>最后登录时间</th>
                                    <th class="span3">
                                        <span class="line"></span>最后登录IP</th>
                                    <th class="span2">
                                        <span class="line"></span>添加时间</th>
                                    <th class="span2">
                                        <span class="line"></span>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                <template v-for="manager in managers">
                                <tr>
                                    <td>{{manager.id}}</td>
                                    <td>{{manager.name}}</td>
                                    <td>{{manager.email}}</td>
                                    <td>{{manager.last_login_time | time}}</td>
                                    <td>{{manager.last_login_ip | long2ip}}</td>
                                    <td>{{manager.create_time | time}}</td>
                                    <td class="align-left">
                                        <a href="">查看</a>
                                        <a href="">修改</a>
                                        <a href="">删除</a>
                                    </td>
                                </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                    <div id="page">
                        <vue-nav :cur.sync="cur" :all.sync="all"></vue-nav>
                    </div>
                    <!-- end users table -->
                </div>
            </div>
        </div>


 <script>
     //格式化时间戳
     Vue.filter('time', function (value) {
         return new Date(parseInt(value) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");
     })
     //格式化ip
     Vue.filter('long2ip',function(stringip){
         var ipAddress = new Array();
         ipAddress[0] = (stringip >>> 24) >>> 0;
         ipAddress[1] = ((stringip << 8) >>> 24) >>> 0;
         ipAddress[2] = (stringip << 16) >>> 24;
         ipAddress[3] = (stringip << 24) >>> 24;
         return String(ipAddress[0]) + "." + String(ipAddress[1]) + "." + String(ipAddress[2]) + "." + String(ipAddress[3]);
     })
     new Vue({
         el: ".content",
         data: {
             managers: {}, //管理员列表
             url:'./index.php?r=admin/manage/managers',
             cur: 1,  //默认为第一页
             all: 0,  //默认分页数
         },
         //调用分页组件
         components:{
             'vue-nav': Vnav
         },
         created: function () {
             var _this = this;
             $.get(_this.url, function (res) {
                 _this.managers = res.adminUsers;
                 _this.all = res.adminTotal;
             });
         },
         //观察cur变化
         watch: {
             cur: function(oldValue , newValue){
                 var _this = this;
                 //ajax 无刷新分页
                 $.get('./index.php?r=admin/manage/managers&page='+oldValue, function (res) {
                     _this.managers = res.adminUsers;
                 });
             }
         },
         methods:{
         }
     })
 </script>
