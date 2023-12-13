class HappyBirthday:
    def __init__(self, name):
        self.name = name

    def wish(self):
        print(f"Happy Birthday, {self.name}! You are {self.name.upper()}'s top priority today!")

# Create an instance of the HappyBirthday class
birthday = HappyBirthday("vinit shahdeo")

# Call the wish method to print the birthday greeting
birthday.wish()