<button onclick="startNarration()">Start Narration</button>

<script>
  function startNarration() {
    var msg = new SpeechSynthesisUtterance();
    msg.text = 'This is a voice narration';
    
    // Change the narration voice
    msg.voice = window.speechSynthesis.getVoices()[2]; // Select the second voice in the list of available voices

    window.speechSynthesis.speak(msg);
  }
</script>
