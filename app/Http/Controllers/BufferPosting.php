<!-- <?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Bulkly\SocialAccounts;
//use BufferPosting;

class BufferPosting extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function show()
    {
        $bufferPosts = BufferPosting::orderBy('id','desc')->get();
        return view('buffer-data',compact('bufferPosts'));
    }
} -->
