### Instruction
Given a Message class that contains the following fields:
  * id (Integer)
  * Recipient (String)
  * Sender (String)
  * Content (String)
  * Subject (String)

We have given you boilerplate code for this class in Ruby. You are free to use and modify these sample as your final answer. 

The source code for the final answer should be saved in the `3_BACKEND/FINAL_ANSWER/` directory.

### Q1
In the provided Message class, create an is_valid method that validates the existence of attributes of an object of the given class. All attributes have to be filled for is_valid to return true. If even just one field is empty, this should return false. An empty string (“”) counts as empty in this case.
Input: none
Output: a boolean. if at least one field is empty, return false. otherwise, return true.

### Q2
In the same Message class, create a to_json method that would return a valid JSON string representation of the object showing all of its attributes. The to_json method should be able to handle parameters that would allow the users to cherry pick the attributes they want to show in the JSON string returned.
Input: an array of Strings representing fields
Output: a JSON String representing the object, showing only the fields specified as input (if input is empty, show all)

### Q3
Create a counterpart method to to_json: create a method from_json that takes a valid JSON string representing a Message and sets the values of the object based on the JSON file. Assume that the input JSON file is properly formatted and valid.
Input: a properly-formatted JSON string representing a Message object
Output: no return value, but the object should take the values from the JSON string as its own, overwriting any existing values.
