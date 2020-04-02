<?php

class Rss extends CI_Controller
{
	public $ycombinatorurl = "https://news.ycombinator.com/jobs";
	function ycombinator()
	{
		header('Content-Type: application/rss+xml; charset=ISO-8859-1');
		$original= new DOMDocument();
		$original->loadHTML(file_get_contents($this->ycombinatorurl));
		$elements = $original->getElementsByTagName("td");

		$rssfeed = new DOMDocument();
		$rssElement = $rssfeed->createElement("rss");
		$rssElement->setAttribute("version","2.0");
		$rssfeed->appendChild($rssElement);
		$channelElement = $rssfeed->createElement("channel");
		$rssElement->appendChild($channelElement);

		$title = $original->getElementsByTagName("title")->item(0)->nodeValue;
		$titleElement = $rssfeed->createElement("title",$title);
		$descriptionElement = $rssfeed->createElement("description",$title);
		$linkElement = $rssfeed->createElement("link",$this->ycombinatorurl);

		$channelElement->appendChild($titleElement);
		$channelElement->appendChild($descriptionElement);
		$channelElement->appendChild($linkElement);

		$i = 0;
		while($tdelement = $elements->item($i))
		{
			$i++;
			if(!is_object($tdelement))
				break;

			$attr = $tdelement->getAttribute("class");
			if($attr == "title")
			{
				$titlelink = $tdelement->getElementsByTagName("a")->item(0);
				if($titlelink == null) continue;
				$authorlink = $tdelement->getElementsByTagName("a")->item(1);
				$author = "";
				if(!is_null($authorlink))
					$author = $authorlink->getElementsByTagName("span")->item(0)->nodeValue;

				$itemdata = array(
					"title" => $titlelink->nodeValue,
					"link" => $titlelink->getAttribute("href"),
					"author" => $author,
					"comments" => " "
				);
				if($itemdata['title'] == "More")
					continue;
				$itemElement = $rssfeed->createElement("item");
				foreach($itemdata as $key => $content)
				{
					$itemDetail = $rssfeed->createElement($key,$content);
					$itemElement->appendChild($itemDetail);
				}
				$channelElement->appendChild($itemElement);

			}
		}
		$rssfeed->preserveWhiteSpace = false;
		$rssfeed->formatOutput = true;
		echo $rssfeed->saveXML();
	}
}

