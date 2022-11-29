<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Helpers\ZoomHelper;



use Illuminate\Http\Request;

class ZoomController extends Controller
{
    public function createZoomSession(Request $request)
	{
		/* Create Zoom Meeting. This method is supposed to be invoked by a simple form post, in which user has to provide meeting title, time and duration.  */

		$dataRet = ZoomHelper::CreateZoomMeeting($request->ZoomSessionTitle, $request->ZoomSessionTime, intval($request->ZoomSessionDuration));
		return redirect()->back();
	}
}




