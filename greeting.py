# greeting.py
from datetime import datetime
import json

hour = datetime.now().hour

if 5 <= hour < 12:
    greeting = "☀️ Good morning!"
elif 12 <= hour < 18:
    greeting = "🌤️ Good afternoon!"
elif 18 <= hour < 22:
    greeting = "🌙 Good evening!"
else:
    greeting = "🌌 Burning the midnight oil?"

print(json.dumps({"greeting": greeting}))
