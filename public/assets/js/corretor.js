<script src="https://spellcheckapi.com/api/v1/speak.js" async></script>

document.addEventListener('DOMContentLoaded', function() {
    var spellcheckElements = document.getElementsByClassName('spellcheck');
    for (var i = 0; i < spellcheckElements.length; i++) {
      new SpellcheckAPI.Speak(spellcheckElements[i]);
    }
  });
  