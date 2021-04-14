<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home': require_once PROTECTED_DIR.'normal/home.php'; break;
	case 'test': require_once PROTECTED_DIR.'normal/permission_test.php'; break;

	case 'keresesresult': require_once PROTECTED_DIR.'keresesresult.php'; break;

	case 'offers': require_once PROTECTED_DIR.'normal/offers.php'; break;

	case 'product': require_once PROTECTED_DIR.'normal/product.php'; break;

	case 'shoppingcart': require_once PROTECTED_DIR.'normal/shoppingcart.php'; break;

	case 'subscribe': require_once PROTECTED_DIR.'normal/subscribe.php'; break;

	case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;

	case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;

	case 'profil': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/profile.php' : header('Location: index.php'); break;

	case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;

	case 'addcreditcard': require_once PROTECTED_DIR.'normal/addcreditcard.php'; break;

	case 'forgetpassword': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/forgetpassword.php' : header('Location: index.php'); break;

	case 'changeprofiledatas': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/changeprofiledatas.php' : header('Location: index.php'); break;

	case 'dropdown': require_once PROTECTED_DIR.'normal/dropdown.php'; break;

	case 'user_list': IsUserLoggedIn() ? require_once PROTECTED_DIR.'admin/user_list.php' : header('Location: index.php'); break;

	case 'edit_user': IsUserLoggedIn() ? require_once PROTECTED_DIR.'admin/edit_user.php' : header('Location: index.php'); break;
	
	case 'addproduct': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/addproduct.php' : header('Location: index.php'); break;

	default: require_once PROTECTED_DIR.'normal/404.php'; break;
}

?>