<?phprequire_once('module/auth.php');setPage('list1', $db->fetchIDRows($db->select('Users LEFT JOIN AddInfo ON auID=uID', 	"uLogin, (SELECT SUM(oSum) FROM Opers WHERE ouID=uID AND oOper='REF') AS RSUM, auID, aAvatar", '', 0, 'RSUM desc', 10), false, 'uLogin'));setPage('list2', $db->fetchIDRows($db->select('Users U LEFT JOIN AddInfo ON auID=U.uID', 	"uLogin, (SELECT COUNT(uID) FROM Users R WHERE R.uRef=U.uID) AS RCNT, auID, aAvatar", '', 0, 'RCNT desc', 10), false, 'uLogin'));showPage();?>