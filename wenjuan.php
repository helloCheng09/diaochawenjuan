<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,viewport-fit=cover">
	<title>管理问卷</title>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		a{
			text-decoration:none;
		}
		.wrap {
			font-size: 17px;
		}
		.add-btn{
			display:inline-block;
			width:35px;
			height:35px;
			margin-right:50px;
			line-height:35px;
			text-align:center;
			border-radius:50%;
			background-color:#ffa233;
			text-decoration:none;
			font-size:12px;
			color:#fff;
		}
		.add-head{
			display:inline-block;
			width:100%;
			height:60px;
			line-height:60px;
			text-align:right;
		}

		.table{
			background-color: ;
		}
		.table-title th {
			font-weight:normal;
			margin:0;
			padding:0;
			font-size:12px;
			line-height:2;
			background: rgba(0,0,0,0.4);
			color:#fff;
		}
		.table-con td{
			text-align:center;
			font-size:14px;
		}
		.con-title{
			display:inline-block;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
			width:60px;
			line-height:56px;
		}
		.con-name{
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div>


		<ul>
		<?php foreach ($wenjuan as $item): ?>
			<li class="con-item">
				<a class="item-link">
					<div class="col-one">
						<span class="one-id">ID:</span>
						<?php echo $item->id; ?>
						<span class="editor">发布者:</span>
						<?php echo $item->name; ?>
					</div>
					<div class="col-two">
						<span class="editor">标题:</span>
						<?php echo $item->title; ?>
					</div>
					<div class="col-thr">
						<span class="editor">创建时间:</span>
						<?php echo date('m-d H:i',$item->create_time); ?>
						<span class="state">状态</span>
						<?php echo $item->status ? '发布中' : '未发布'; ?>
					</div>
					<div class="col-four">
						<span class="time">提交次数</span>
						<?php echo $item->num; ?>
					</div>
					<div class="col-fif">
						<?php if($item->num == 0){ ?>
						[<a href="wj_edit/<?php echo $item->id; ?>">编辑</a>]
						<?php } ?>
						[<a href="wj_delete/<?php echo $item->id; ?>">删除</a>]
					</div>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>	





			<table class="table">
				<tr class="table-title">
					<th width="5%">ID</th>
					<th width="5%">标题</th>
					<th width="10%">发布者</th>
					<th width="5%">状态</th>
					<th width="20%">创建时间</th>
					<th width="10%">提交数</th>
					<th width="20%">操作</th>
				</tr>

				<?php foreach ($wenjuan as $item): ?>
				<tr class="table-con">
					<td>
						<?php echo $item->id; ?>
					</td>
					<td class="con-title">
						<?php echo $item->title; ?>
					</td>
					<td class="con-name">
						<?php echo $item->name; ?>
					</td>
					<td class="con-fabu">
						<?php echo $item->status ? '发布中' : '未发布'; ?>
					</td>
					<td>
						<?php echo date('m-d H:i',$item->create_time); ?>
					</td>
					<td>
						<?php echo $item->num; ?>
					</td>
					<td>
						<?php if($item->num == 0){ ?>
						[<a href="wj_edit/<?php echo $item->id; ?>">编辑</a>]
						<?php } ?>
						[<a href="wj_delete/<?php echo $item->id; ?>">删除</a>]
					</td>
				</tr>
				<?php endforeach; ?>

				<tr  class="table-title">
					<th width="10%">ID</th>
					<th width="20%">标题</th>
					<th width="10%">发布者</th>
					<th width="10%">状态</th>
					<th width="20%">创建时间</th>
					<th>提交数</th>
					<th width="20%">操作</th>
				</tr>
			</table>

			<div class="pagination">
				<?php //echo $page; ?>
			</div>
			<span class="add-head"><a href="wj_add" class="add-btn">添加</a></span>
		</div>
	</div>
</body>

</html>