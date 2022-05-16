<?php $tz = new \Carbon\CarbonTimeZone(1); ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{route('landing')}}</loc>
        <lastmod><?php echo Carbon\Carbon::now()->format('Y-m-d\TH:i:s') . $tz->toOffsetName(); ?></lastmod>
    </url>
    <url>
        <loc>{{route('live.tv')}}</loc>
        <lastmod><?php echo Carbon\Carbon::now()->format('Y-m-d\TH:i:s') . $tz->toOffsetName(); ?></lastmod>
    </url>
    <url>
        <loc>{{route('contact.us')}}</loc>
        <lastmod><?php echo Carbon\Carbon::now()->format('Y-m-d\TH:i:s') . $tz->toOffsetName(); ?></lastmod>
    </url>
    <url>
        <loc>{{route('about.us')}}</loc>
        <lastmod><?php echo Carbon\Carbon::now()->format('Y-m-d\TH:i:s') . $tz->toOffsetName(); ?></lastmod>
    </url>
    <url>
        <loc>{{route('search')}}</loc>
        <lastmod><?php echo Carbon\Carbon::now()->format('Y-m-d\TH:i:s') . $tz->toOffsetName(); ?></lastmod>
    </url>
    @forelse($channels as $channel)
        <url>
            <loc>{{route('channel.details',['slug'=>$channel->slug])}}</loc>
            <lastmod><?php echo Carbon\Carbon::parse($channel->updated_at)->format('Y-m-d\TH:i:s') . $tz->toOffsetName(); ?></lastmod>
        </url>
    @empty
    @endforelse
    @forelse($channelCategories as $category)
        <url>
            <loc>{{route('channel.category',['slug'=>$category->slug])}}</loc>
            <lastmod><?php echo Carbon\Carbon::parse($category->updated_at)->format('Y-m-d\TH:i:s') . $tz->toOffsetName(); ?></lastmod>
        </url>
    @empty
    @endforelse
</urlset>
