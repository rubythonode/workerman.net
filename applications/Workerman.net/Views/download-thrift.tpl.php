<ul class="breadcrumb">
		<li>
				<a href="/">首页</a> <span class="divider"></span>
		</li>
		<li>
				<a href="/download">下载</a> <span class="divider"></span>
		</li>
		<li class="active">
				Thrift远程调用框架
		</li>
</ul>
<div class="row clearfix">
	<div class="col-md-3 column">
		<div class="list-group">
			<a class="list-group-item" href="/download">workerman</a>
			<div class="list-group-item active">
				Thrift远程调用框架
			</div>
			<a class="list-group-item" href="/download/chat">聊天室框架</a>
			<a class="list-group-item" href="/download/statistics">统计监控系统</a>
		</div>
	</div>
	<div class="col-md-9 column">
		<div class="jumbotron">
			<h3>
				下载workerman Thrift Rpc远程调用框架
			</h3>
			<p>
				workerman Thrift Rpc是一款开源的Rpc远程调用框架，该框架使用workerman作为进程管理器，基于thrift协议，支持跨语言调用。
			</p>
			<p>
				<a class="btn btn-primary btn-large" href="/download/thriftzip">下载workerman-thrift-rpc</a> <font class='f11 gray'>下载<?php echo $thrift_download_count;?>次</font>
			</p>
		</div>
		<table class="table table-bordered">
		<thead>
				<tr>
						<th>
								
						</th>
						<th>
								workerman-thrift-rpc
						</th>
				</tr>
		</thead>
		<tbody>
				<tr>
						<td>
								最新版本
						</td>
						<td>
								1.0.1 
						</td>
				</tr>
				<tr>
						<td>
								源代码
						</td>
						<td>
								<a href="/download/thriftzip">workerman-thrift-rpc.zip</a>
						</td>
				</tr>
				<tr>
						<td>
								环境
						</td>
						<td>
								php-cli &gt;=5.3 不支持Win系统
						</td>
				</tr>
				<tr>
						<td>
								Git 地址
						</td>
						<td>
								<p>你可以从下面的github地址中获得源码</p>
								<p>https://github.com/walkor/workerman-thrift</p>
						</td>
				</tr>
				<tr>
						<td>
								安装
						</td>
						<td>
								无需安装，下载下来即可使用
						</td>
				</tr>
				<tr>
						<td>
								相关命令
						</td>
						<td>
							<ul>
								<li>启动: ./bin/workermand start</li>
								<li>停止: ./bin/workermand stop</li>
								<li>平滑重启: ./bin/workermand reload</li>
								<li>查看状态: ./bin/workermand status</li>
							</ul>
						</td>
				</tr>
				<tr>
						<td>
								支持的特性
						</td>
						<td>
							<ul>
								<li>纯PHP开发</li>
								<li>多进程支持</li>
								<li>支持libevent扩展，支持高并发</li>
								<li>支持平滑重启</li>
								<li>支持PHP文件更新自动检测及加载</li>
								<li>支持原生thrift协议，自动生成c/c++/java等各种语言的客户端</li>
								<li>集成统计监控模块</li>
								<li>PHP客户端支持异步</li>
								<li>PHP客户端支持故障节点自动踢出</li>
								<li>PHP客户端支持故障节点恢复检测</li>
							</ul>
						</td>
				</tr>
				<tr>
						<td>
								性能
						</td>
						<td>
							<p>系统：Debian GNU/Linux 6.0<br/>
cpu ：Intel(R) Xeon(R) CPU E5-2420 0 @ 1.90GHz * 24<br/>
内存：64G<br/>

WorkerMan：开启24个Worker进程处理业务请求<br/>
压测软件：loadrunner<br/></p>
							<p>吞吐量：平均8200/S<br/>
内存占用：24*12M=288M<br/>
cpu平均使用率：55%<br/>
load：16<br/>
流量：15M/S<br/>
<br/>
处理曲线平稳，无内存泄漏，无流量抖动</p>
						</td>
				</tr>
		</tbody>
		</table>
	</div>
</div>