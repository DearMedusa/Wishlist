class Site {

	public static function headerHTML($titredelapage) {
		return
		'<!DOCTYPE html>'.
		'<html lang="fr" dir="ltr">'.
		  '<head>'.
		    '<meta charset="utf-8">'.
		    '<title>$titredelapage</title>'.
		  '</head>'.
		  '<body>';
	}

	public static function footerHTML() {
		return'</body>';
		}
}
?>
