<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Websitedesign;


class EmbedFormController extends Controller
{
    public function show($slug)
    {
        // Load form based on slug (contact, admission, etc.)
        return view('embed.form', compact('slug'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|max:255',
            'phone'       => 'required|string|max:255',
            'message'     => 'required|string|max:255',
            
        ]);

        Websitedesign::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'message' => $request->message,
            'source'  => 'website', // 👈 ENUM value
        ]);

      // Store or email form data here
        // FormSubmission::create($request->only(['name','email','message']));

        return response()->json(['message' => 'Form submitted successfully!']);
    }

    public function embedJs(\Illuminate\Http\Request $request)
{
    $form   = $request->query('form', 'contact');
    $minH   = (int) $request->query('minHeight', 520);
    $target = addslashes($request->query('target', ''));
    $embedUrl = url("/embed/forms/{$form}");

    $script = <<<JS
(function(){
  function currentScript(){
    return document.currentScript || (function(s){ return s[s.length-1]; })(document.getElementsByTagName('script'));
  }

  var scriptEl = currentScript();
  var container = null;

  var targetSel = "{$target}";
  if (targetSel) container = document.querySelector(targetSel);
  if (!container) container = scriptEl.parentNode;

  // Wrapper (block-level, WP-safe)
  var wrapper = document.createElement('div');
  wrapper.style.width = '100%';
  wrapper.style.margin = '0';
  wrapper.style.padding = '0';

  // Iframe
 var iframe = document.createElement('iframe');
iframe.src = "{$embedUrl}";
iframe.style.width = '100%';
iframe.style.border = '0';
iframe.style.display = 'block';
iframe.style.overflow = 'hidden';
iframe.setAttribute('scrolling', 'no');   // ✅ KEY
iframe.style.height = '1px';               // start tiny
iframe.style.minHeight = '0'; 

  wrapper.appendChild(iframe);

  // Replace script tag cleanly
  if (container && container.nodeName === 'P') {
    container.parentNode.insertBefore(wrapper, container);
    container.parentNode.removeChild(container);
  } else {
    container.insertBefore(wrapper, scriptEl);
    container.removeChild(scriptEl);
  }

  // 🔑 Auto height from iframe
  window.addEventListener('message', function(e){
  if (e.data?.type === 'FT_EMBED_HEIGHT') {
    iframe.style.height = e.data.h + 'px';
  }
});
})();
JS;

    return response($script, 200)
        ->header('Content-Type', 'application/javascript');
}


}
