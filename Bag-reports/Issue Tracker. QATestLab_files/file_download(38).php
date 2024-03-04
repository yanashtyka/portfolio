<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,follow" />
	<title>Issue Tracker. QATestLab</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/default.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/status_config.php?cache_key=55233cd5161ef4e1df0f39040f0c5322" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/login.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/dropzone-5.5.0.min.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/bootstrap-3.4.1.min.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/font-awesome-4.7.0.min.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/bootstrap-datetimepicker-4.17.47.min.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/ace.min.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/ace-mantis.css" />
	<link rel="stylesheet" type="text/css" href="https://bt-w.qatestlab.com/css/ace-skins.min.css" />

	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="https://bt-w.qatestlab.com/browser_search_plugin.php?type=text" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="https://bt-w.qatestlab.com/browser_search_plugin.php?type=id" />
	<script type="text/javascript" src="/javascript_config.php?cache_key=55233cd5161ef4e1df0f39040f0c5322"></script>
	<script type="text/javascript" src="/javascript_translations.php?cache_key=a5fdf13a45e6a10d85bedeeb961935af"></script>
	<script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="/js/dropzone-5.5.0.min.js"></script>
	<script type="text/javascript" src="/js/common.js"></script>
<script type="text/javascript" src="/plugin_file.php?file=BugFiles/js/bug-files.min.js"></script>
<script type="text/javascript" src="/plugin_file.php?file=JQueryUI/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="/plugin_file.php?file=JQueryUI/jquery-ui.min.css"></link>
<script type="text/javascript" src="/plugin_file.php?file=Lightbox/js/lightbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="/plugin_file.php?file=Lightbox/css/lightbox.min.css"></link>
<style>    .lb-nav a.lb-prev {
        background-image: url(/plugin_file.php?file=Lightbox/img/prev.png);
    }
    .lb-nav a.lb-next {
        background-image: url(/plugin_file.php?file=Lightbox/img/next.png);
    }
    .lb-data .lb-close {
        background-image: url(/plugin_file.php?file=Lightbox/img/close.png);
    }
    .lb-cancel {
        background-image: url(/plugin_file.php?file=Lightbox/img/loading.gif);
    }</style><script type='text/javascript' nonce='TWFudGlzQlQgcGx1Z2luIExpZ2h0Ym94IGN1c3RvbSBmb3IgUUFUZXN0TGFi'>$(document).ready(function () {    $('.bug-attachment-preview-image a').attr('rel', 'lightbox').attr('data-lightbox', 'bug_image_preview');    $('div#bugnotes *').filter((index, element) => element.id && element.id.match(/attachment_preview_\d+_(open|closed)/)).find('a:nth-child(2)').attr('rel', 'lightbox').attr('data-lightbox', 'bug_image_link');});</script><link rel="stylesheet" type="text/css" href="/plugin_file.php?file=UserClient/css/user-client.min.css"></link>
<script type="text/javascript" src="/plugin_file.php?file=ProjectsTree/bootstrap-treeview.min.js"></script>
<script type="text/javascript" src="/plugin_file.php?file=ProjectsTree/projects-tree-view.min.js"></script>
<link rel="stylesheet" type="text/css" href="/plugin_file.php?file=ProjectsTree/projects-tree-view.min.css"></link>
<script type="text/javascript" src="/plugin_file.php?file=SortComments/sort-comments.min.js"></script>
</head>
<body class="login-layout light-login"><style>
* { font-family: "Open Sans"; } 
h1, h2, h3, h4, h5 { font-family: "Open Sans"; } 
</style>
<div class="main-container" id="main-container">
<div class="main-content">
<div class="row">
<div class="col-md-offset-3 col-md-6 col-sm-10 col-sm-offset-1">
	<div class="login-container">
		<div class="space-12 hidden-480"></div>
			<div class="login-logo">
		<img src="/images/qatestlab-logo.svg">
	</div>
			<div class="space-24 hidden-480"></div>

<div class="position-relative">
	<div class="signup-box visible widget-box no-border" id="login-box">
		<div class="widget-body">
			<div class="widget-main">
				<h4 class="header lighter bigger">
					<i class="fa fa-sign-in ace-icon" ></i>					Вхід				</h4>
				<div class="space-10"></div>
	<form id="login-form" method="post" action="login_password_page.php">
		<fieldset>

			<input type="hidden" name="return" value="file_download.php?file_id=1200986&amp;type=bug" />
			<label for="username" class="block clearfix">
				<span class="block input-icon input-icon-right">
					<input id="username" name="username" type="text" placeholder="Користувач"
						   size="32" maxlength="191" value=""
						   class="form-control autofocus">
					<i class="fa fa-user ace-icon" ></i>				</span>
			</label>

			<div class="space-10"></div>

			<input type="submit" class="width-40 pull-right btn btn-success btn-inverse bigger-110" value="Увійти" />
		</fieldset>
	</form>

</div>


		</div>
</div>
</div>
</div>
</div>

</div></div>
</div>
	<script type="text/javascript" src="/js/bootstrap-3.4.1.min.js"></script>
	<script type="text/javascript" src="/js/moment-with-locales-2.29.4.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap-datetimepicker-4.17.47.min.js"></script>
	<script type="text/javascript" src="/js/typeahead.jquery-1.3.0.min.js"></script>
	<script type="text/javascript" src="/js/list-1.5.0.min.js"></script>
	<script type="text/javascript" src="/js/ace.min.js"></script>
</body>
