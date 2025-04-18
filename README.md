# 📬 Laravel 10 Email Functionality

This Laravel 10 project demonstrates various ways to send emails using **Mail::send**, including support for:

- Plain text emails
- HTML view emails
- Emails with PDF attachments
- Sending data from user-submitted forms

---

## 🚀 Features

- ✅ Send static email with subject & body text
- ✅ Send email with PDF file attached (using DomPDF)
- ✅ Send dynamic emails from user input
- ✅ Input validation on form submission
- ✅ Use Blade views for email body formatting

---

## 🛠️ Tech Stack

| Tech        | Description               |
|-------------|---------------------------|
| Laravel     | v10.x                     |
| Mail        | Laravel Mail & Mailable   |
| PDF         | barryvdh/laravel-dompdf   |
| Blade       | Templating engine         |
| Mail Driver | SMTP (Gmail)            |

---

## 📁 Folder Structure

```bash
app/
├── Http/
│   └── Controllers/
│       └── MailController.php
├── Mail/
│   └── SendAttachment.php

resources/
├── views/
│   ├── form1.blade.php     # Form to send plain text
│   ├── form2.blade.php     # Form to send email + PDF
│   └── message.blade.php   # Email body view

routes/
└── web.php

```

# Concept
This project covers the first approach to send emails in Laravel:

Mail::send() — Quick, functional way to send emails using a view.
Mailable Class — Structured, reusable class for complex emails and attachments.
