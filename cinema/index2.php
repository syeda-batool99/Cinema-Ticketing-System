<?php
session_start();
if (!isset($_SESSION['email2'])) {
  echo 'the session is empty';
  header('Location: /cinema/admin-login.php');
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                                   ATTENTION!
 * If you see this message in your browser (Internet Explorer, Mozilla Firefox, Google Chrome, etc.)
 * this means that PHP is not properly installed on your web server. Please refer to the PHP manual
 * for more details: http://php.net/manual/install.php
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */

include_once dirname(__FILE__) . '/components/startup.php';
include_once dirname(__FILE__) . '/components/application.php';
include_once dirname(__FILE__) . '/authorization.php';
include_once dirname(__FILE__) . '/components/page/home_page.php';
include_once dirname(__FILE__) . '/components/error_utils.php';

SetUpUserAuthorization();
?>
<head>
<title>Admin Home</title>
 </head>
<body>
<style>
.lg-btn {


font-size: 15px;
margin-left: 1400px;
position: relative;
bottom: 30px;
</style>

}
<div class="container-fluid brand-div">
    <!-- Brand/logo -->

    <form action="bookings.php" method="post">
      <input type="submit" name="adminlogout" value="Log out" class="lg-btn">
    </form>
  </div>
</body>

<?php
  if (isset($_POST['adminlogout'])) {
    session_destroy();
    header('Location: /cinema/admin-login.php');
  }
  ?>
<?php
try {

    $page = new HomePage(GetCurrentUserPermissionSetForDataSource("index"), 'UTF-8');
    $page->SetHeader(GetPagesHeader());
    $page->SetFooter(GetPagesFooter());
    $page->setBanner(GetHomePageBanner());
    $page->SetShowPageList(false);
    $page->OnGetCustomTemplate->AddListener('Global_GetCustomTemplateHandler');
    $page->OnCustomHTMLHeader->AddListener('Global_CustomHTMLHeaderHandler');
    $renderer = new ViewRenderer($page->GetLocalizerCaptions());
    echo $renderer->Render($page);

} catch(Exception $e) {
    ShowErrorPage($e);
}

  if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: /cinema/user-login.php');
  }
  ?>