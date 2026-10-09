import psutil

# Iterate through all running processes
for proc in psutil.process_iter(['pid', 'name', 'username', 'cpu_percent', 'memory_percent']):
    try:
        # Fetch process details as a dictionary
        info = proc.info
        print(f"PID: {info['pid']:<6} | Name: {info['name']:<25} | User: {info['username']}")
    except (psutil.NoSuchProcess, psutil.AccessDenied, psutil.ZombieProcess):
        # Ignore processes that terminated or lack permission to access
        pass