class Message
  attr_accessor :recipient, :sender, :content, :subject
end

# Q1. Example:
#  m = Message.new
#  m.recipient = 'recipient@email.test'
#  m.sender = 'sender@email.test'
#  m.content = 'Hello! This is my content!'
#  m.subject = 'Test Subject'
#
#  m.is_valid // id is missing
#    => false
#
# Q2. Example:
#  m = Message.new
#  m.id = 1
#  m.recipient = 'recipient@email.test'
#  m.sender = 'sender@email.test'
#  m.content = 'Hello! This is my content!'
#  m.subject = 'Test Subject'
#
#  input = []
#  m.to_json(input)
#    => '{ "id": 1, "recipient": "recipient@email.test", "sender": "sender@email.test", "content": "Hello! This is my content!", "subject": "Test Subject" }'
#
#  input = [ "id", "recipient" ]
#  m.to_json(input)
#    => '{ "id": 1, "recipient": "recipient@email.test" }'
#
# Q3. Example:
#  m = Message.new
#  m.id = 10
#  m.id
#    => 10
#
#  m.from_json('{ "id": 1, "recipient": "recipient@email.test", "sender": "sender@email.test", "content": "Hello! This is my content!", "subject": "Test Subject" }')
#  m.id
#    => 1
#  m.recipient
#    => "recipient@email.test"
