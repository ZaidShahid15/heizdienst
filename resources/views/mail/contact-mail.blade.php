<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8; padding:40px 0;">
<tr>
<td align="center">

<table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 3px 10px rgba(0,0,0,0.08);">

<!-- Header -->
<tr>
<td style="background:#4f46e5; color:#ffffff; padding:20px 30px; font-size:22px; font-weight:bold;">
📩 New Contact Message
</td>
</tr>

<!-- Content -->
<tr>
<td style="padding:30px; color:#333; font-size:15px; line-height:1.6;">

<p style="margin-top:0;">You have received a new message from your website contact form.</p>

<table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse; margin-top:20px;">

<tr style="background:#f9fafb;">
<td style="font-weight:bold; width:120px;">Name</td>
<td>{{ $details['name'] }}</td>
</tr>

<tr>
<td style="font-weight:bold;">Phone</td>
<td>{{ $details['phone'] }}</td>
</tr>

<tr style="background:#f9fafb;">
<td style="font-weight:bold;">Message</td>
<td>{{ $details['message'] }}</td>
</tr>

</table>

</td>
</tr>

<!-- Footer -->
<tr>
<td style="padding:20px 30px; background:#f9fafb; font-size:13px; color:#777; text-align:center;">
This message was sent from your website contact form.
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>
