<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
/* ===== RESET FOR IFRAME ===== */
html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  overflow: hidden;
  background: transparent;
  font-family: Arial, Helvetica, sans-serif;
}

/* ===== FORM CONTAINER ===== */
#laravel-form-container {
  width: 100%;
  box-sizing: border-box;
  background: #ffffff;
  border-radius: 10px;
  border: 1px solid #e5e7eb;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  padding: 24px;
}

/* ===== FORM ===== */
#laravelForm {
  width: 100%;
}

/* ===== LABELS ===== */
#laravelForm label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: #111827;
  margin-bottom: 6px;
}

/* ===== INPUTS & TEXTAREA ===== */
#laravelForm input,
#laravelForm textarea {
  width: 100%;
  height: 44px;
  padding: 10px 12px;
  font-size: 15px;
  border: 1px solid #d1d5db;
  border-radius: 8px;
  box-sizing: border-box;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

#laravelForm textarea {
  height: auto;
  min-height: 120px;
  resize: none;
}

/* ===== FOCUS STATE ===== */
#laravelForm input:focus,
#laravelForm textarea:focus {
  outline: none;
  border-color: #105278;
  box-shadow: 0 0 0 2px rgba(16,82,120,0.15);
}

/* ===== FIELD WRAPPER ===== */
.form-group {
  margin-bottom: 16px;
}

/* ===== SUBMIT BUTTON ===== */
#laravelForm button {
  width: 100%;
  height: 44px;
  background: #105278;
  color: #ffffff;
  border: none;
  border-radius: 8px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.2s ease, transform 0.1s ease;
}

#laravelForm button:hover {
  background: #0d4464;
}

#laravelForm button:active {
  transform: scale(0.98);
}

/* ===== MOBILE ===== */
@media (max-width: 768px) {
  #laravel-form-container {
    padding: 16px;
  }
}
</style>
<style>
#formAlert {
  margin-bottom: 15px;
  padding: 12px 14px;
  border-radius: 6px;
  font-size: 14px;
}
</style>
</head>

<body>

<div id="laravel-form-container">
<div id="formAlert" class="alert" style="display:none;"></div>
  <form id="laravelForm">

    <div class="form-group">
      <label>Full Name *</label>
      <input type="text" name="name" required placeholder="Your Name">
    </div>

    <div class="form-group">
      <label>Email Address *</label>
      <input type="email" name="email" required placeholder="email@example.com">
    </div>

    <div class="form-group">
      <label>Phone Number</label>
      <input type="tel" name="phone" placeholder="XXXXXXXXX">
    </div>

    <div class="form-group">
      <label>Your Message *</label>
      <textarea name="message" required placeholder="Tell us about your project..."></textarea>
    </div>

    <button type="submit">Send Message</button>

  </form>

</div>

<script>
document.getElementById('laravelForm').addEventListener('submit', async function(e) {
  e.preventDefault();

  const alertBox = document.getElementById('formAlert');
  alertBox.style.display = 'none';

  const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

  try {
    const res = await fetch('{{ url("/forms/submit") }}', {
      method: 'POST',
      body: new FormData(e.target),
      headers: {
        'Accept': 'application/json',
        ...(token ? {'X-CSRF-TOKEN': token} : {})
      }
    });

    const json = await res.json();

    if (res.ok) {
      alertBox.innerHTML = json.message || '✔ Submission successful! Our team will connect with you soon.';
      alertBox.style.background = '#e6f7ee';
      alertBox.style.color = '#0f5132';
      alertBox.style.border = '1px solid #badbcc';
      alertBox.style.display = 'block';
      e.target.reset();
    } else {
      throw json;
    }

  } catch (err) {
    alertBox.innerHTML = err.message || 'Something went wrong. Please try again.';
    alertBox.style.background = '#fdecea';
    alertBox.style.color = '#842029';
    alertBox.style.border = '1px solid #f5c2c7';
    alertBox.style.display = 'block';
  }

  // Auto-hide after 5 seconds
  setTimeout(() => {
    alertBox.style.display = 'none';
  }, 5000);
});
</script>


<script>
function postHeight() {
  const height = Math.max(
    document.body.scrollHeight,
    document.documentElement.scrollHeight
  );
  parent.postMessage({ type: 'FT_EMBED_HEIGHT', h: height }, '*');
}

window.addEventListener('load', postHeight);
window.addEventListener('resize', () => setTimeout(postHeight, 100));

const observer = new MutationObserver(postHeight);
observer.observe(document.body, { childList: true, subtree: true });
</script>


</body>
</html>
