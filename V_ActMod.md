{
  "sha": "b9b38eb59bde58d3e0ffa75a8dc8a238e1664717",
  "node_id": "C_kwDOBbCfHtoAKGI5YjM4ZWI1OWJkZTU4ZDNlMGZmYTc1YThkYzhhMjM4ZTE2NjQ3MTc",
  "commit": {
    "author": {
      "name": "Earu",
      "email": "earu.derg@gmail.com",
      "date": "2022-11-13T14:21:02Z"
    },
    "committer": {
      "name": "Earu",
      "email": "earu.derg@gmail.com",
      "date": "2022-11-13T14:21:02Z"
    },
    "message": "check if a command is blocked for the command mode + rare error fix",
    "tree": {
      "sha": "0d9c7ddaaf8649f94ce8c3b70778d56a3efce54b",
      "url": "https://api.github.com/repos/Earu/EasyChat/git/trees/0d9c7ddaaf8649f94ce8c3b70778d56a3efce54b"
    },
    "url": "https://api.github.com/repos/Earu/EasyChat/git/commits/b9b38eb59bde58d3e0ffa75a8dc8a238e1664717",
    "comment_count": 0,
    "verification": {
      "verified": false,
      "reason": "unsigned",
      "signature": null,
      "payload": null
    }
  },
  "url": "https://api.github.com/repos/Earu/EasyChat/commits/b9b38eb59bde58d3e0ffa75a8dc8a238e1664717",
  "html_url": "https://github.com/Earu/EasyChat/commit/b9b38eb59bde58d3e0ffa75a8dc8a238e1664717",
  "comments_url": "https://api.github.com/repos/Earu/EasyChat/commits/b9b38eb59bde58d3e0ffa75a8dc8a238e1664717/comments",
  "author": {
    "login": "Earu",
    "id": 20880060,
    "node_id": "MDQ6VXNlcjIwODgwMDYw",
    "avatar_url": "https://avatars.githubusercontent.com/u/20880060?v=4",
    "gravatar_id": "",
    "url": "https://api.github.com/users/Earu",
    "html_url": "https://github.com/Earu",
    "followers_url": "https://api.github.com/users/Earu/followers",
    "following_url": "https://api.github.com/users/Earu/following{/other_user}",
    "gists_url": "https://api.github.com/users/Earu/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/Earu/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/Earu/subscriptions",
    "organizations_url": "https://api.github.com/users/Earu/orgs",
    "repos_url": "https://api.github.com/users/Earu/repos",
    "events_url": "https://api.github.com/users/Earu/events{/privacy}",
    "received_events_url": "https://api.github.com/users/Earu/received_events",
    "type": "User",
    "site_admin": false
  },
  "committer": {
    "login": "Earu",
    "id": 20880060,
    "node_id": "MDQ6VXNlcjIwODgwMDYw",
    "avatar_url": "https://avatars.githubusercontent.com/u/20880060?v=4",
    "gravatar_id": "",
    "url": "https://api.github.com/users/Earu",
    "html_url": "https://github.com/Earu",
    "followers_url": "https://api.github.com/users/Earu/followers",
    "following_url": "https://api.github.com/users/Earu/following{/other_user}",
    "gists_url": "https://api.github.com/users/Earu/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/Earu/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/Earu/subscriptions",
    "organizations_url": "https://api.github.com/users/Earu/orgs",
    "repos_url": "https://api.github.com/users/Earu/repos",
    "events_url": "https://api.github.com/users/Earu/events{/privacy}",
    "received_events_url": "https://api.github.com/users/Earu/received_events",
    "type": "User",
    "site_admin": false
  },
  "parents": [
    {
      "sha": "9e2cd7ef5a06ed01d24a4d5247b713ed1d58289b",
      "url": "https://api.github.com/repos/Earu/EasyChat/commits/9e2cd7ef5a06ed01d24a4d5247b713ed1d58289b",
      "html_url": "https://github.com/Earu/EasyChat/commit/9e2cd7ef5a06ed01d24a4d5247b713ed1d58289b"
    }
  ],
  "stats": {
    "total": 16,
    "additions": 16,
    "deletions": 0
  },
  "files": [
    {
      "sha": "1c88af759600f006e94a1c9c9766ebbec96e576b",
      "filename": "lua/easychat/easychat.lua",
      "status": "modified",
      "additions": 16,
      "deletions": 0,
      "changes": 16,
      "blob_url": "https://github.com/Earu/EasyChat/blob/b9b38eb59bde58d3e0ffa75a8dc8a238e1664717/lua%2Feasychat%2Feasychat.lua",
      "raw_url": "https://github.com/Earu/EasyChat/raw/b9b38eb59bde58d3e0ffa75a8dc8a238e1664717/lua%2Feasychat%2Feasychat.lua",
      "contents_url": "https://api.github.com/repos/Earu/EasyChat/contents/lua%2Feasychat%2Feasychat.lua?ref=b9b38eb59bde58d3e0ffa75a8dc8a238e1664717",
      "patch": "@@ -1774,6 +1774,16 @@ if CLIENT then\n \t\tend)\r\n \r\n \t\tEasyChat.AddMode(\"Console\", function(text)\r\n+\t\t\tif IsConCommandBlocked(text) then\r\n+\t\t\t\tlocal text_entry = EasyChat.GetMainTextEntry()\r\n+\t\t\t\tif IsValid(text_entry) then\r\n+\t\t\t\t\tlocal command = text:Split(\" \")[1]\r\n+\t\t\t\t\ttext_entry:TriggerBlink((\"'%s' IS BLOCKED! USE THE CONSOLE!\"):format(command))\r\n+\t\t\t\tend\r\n+\r\n+\t\t\t\treturn\r\n+\t\t\tend\r\n+\r\n \t\t\tLocalPlayer():ConCommand(text)\r\n \t\tend)\r\n \r\n@@ -2804,6 +2814,12 @@ if CLIENT then\n \r\n \t\tlocal chathud = EasyChat.ChatHUD\r\n \t\tlocal function chathud_screen_resolution_changed()\r\n+\t\t\tif not chathud then\r\n+\t\t\t\tchathud = EasyChat.ChatHUD\r\n+\t\t\tend\r\n+\r\n+\t\t\tif not chathud then return end\r\n+\r\n \t\t\tlocal x, y, w, h = EasyChat.GetDefaultBounds()\r\n \t\t\tx, y, w, h = chathud_get_bounds(x, y, w, h)\r\n \r"
    }
  ]
}
