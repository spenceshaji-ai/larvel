import psutil

def is_process_running(process_name):
    """
    Check if there is any running process that matches the given name.
    Comparison is case-insensitive.
    """
    target_name = process_name.lower()
    
    for proc in psutil.process_iter(['name']):
        try:
            # Get process name and perform a case-insensitive check
            if proc.info['name'] and proc.info['name'].lower() == target_name:
                return True
        except (psutil.NoSuchProcess, psutil.AccessDenied, psutil.ZombieProcess):
            # Handle potential race conditions or permission issues
            pass
            
    return False

# Usage
process_to_check = "tally.exe"

if is_process_running(process_to_check):
    print(f"'{process_to_check}' is currently running.")
else:
    print(f"'{process_to_check}' is NOT running.")