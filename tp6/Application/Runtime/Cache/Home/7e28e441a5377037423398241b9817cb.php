<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
          <div>
                  
                  <table border="1px" cellpadding="0" id="app">
                      <th>id</th>
                      <th>账号</th>
                      <th>密码</th>
                      <tr v-for="v in info">
                          <td>{{v.id}}</td>
                          <td>{{v.user}}</td>
                          <td>{{v.psd}}</td>

                      </tr>
                  </table>

          </div>


          <script src="/Public/jquery.js"></script>
          <script src="/Public/vue.js"></script>
          <script>
              var siguojin=new Vue({
                          el:"#app",
                          data:{
                            info:{}
                          },
                          created:function(){
                            this.wei();
                          },
                          methods:{
                                  wei:function(){
                                    var that=this;
                                    $.ajax({
                                      type:"post",
                                      url:"<?php echo U('bdd');?>",
                                      dataType:'json',
                                      success:function(a){
                                        console.log(a);
                                        that.info=a;
                                      }
                                    })
                                  }
                          }

              })

          </script>
</body>
</html>