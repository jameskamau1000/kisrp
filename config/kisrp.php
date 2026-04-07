<?php

return [

    'programme' => [
        'acronym' => 'KISRP',
        'full_name' => 'Kenya Informal Settlements Redevelopment Programme',
        'tagline' => 'Inclusive, safe, resilient, and sustainable neighbourhoods.',
    ],

    /*
    | Home hero thumbnails (public/images/home/)
    */
    'hero_thumbnails' => [
        [
            'image' => 'images/home/hero-stakeholders.png',
            'alt' => 'KISRP programme stakeholders and partners',
            'caption' => 'Stakeholder engagement',
        ],
        [
            'image' => 'images/home/hero-launch-workshop.png',
            'alt' => 'Technical launch workshop for the Kenya Informal Settlements Redevelopment Programme',
            'caption' => 'Technical launch workshop',
        ],
    ],

    /*
    | Branding files under public/images/branding/
    | Copy your official assets here when ready.
    */
    'branding' => [
        'logo' => 'images/branding/kisrp-logo.png',
        'partnership_strip' => 'images/branding/kenya-italy-partnership.png',
        'government_kenya' => 'images/branding/government-kenya-seal.png',
        'aics' => 'images/branding/aics-logo.png',
    ],

    'county_seals' => [
        [
            'name' => 'Kilifi County',
            'image' => 'images/branding/county-kilifi.png',
        ],
        [
            'name' => 'Siaya County',
            'image' => 'images/branding/county-siaya.png',
        ],
        [
            'name' => 'Kajiado County',
            'image' => 'images/branding/county-kajiado.png',
        ],
    ],

    /*
    | Pilot / county focus pages. Add hero_image path when you provide photos,
    | e.g. images/counties/siaya/hero.jpg — file must exist under public/.
    */
    'pilots' => [
        [
            'slug' => 'siaya',
            'settlement' => 'Awelo',
            'county' => 'Siaya',
            'summary' => 'Pilot activities in Siaya County support community-led planning, data collection, and upgrading readiness.',
            'planning_map_image' => 'images/maps/awelo-special-planning-area.png',
            'planning_map_alt' => 'GIS map: Awelo Special Planning Area, parcels and structures, Siaya County',
            'hero_image' => 'images/pilots/siaya/awelo-01-workshop.png',
            'gallery' => [
                [
                    'image' => 'images/pilots/siaya/awelo-01-workshop.png',
                    'alt' => 'Workshop session with participants in Awelo, Siaya County',
                    'caption' => 'Training and engagement workshop',
                ],
                [
                    'image' => 'images/pilots/siaya/awelo-02-mapping.png',
                    'alt' => 'Facilitator presenting settlement mapping and spatial data in Awelo',
                    'caption' => 'Mapping and settlement diagnostics',
                ],
                [
                    'image' => 'images/pilots/siaya/awelo-03-session.png',
                    'alt' => 'Participants in a collaborative session in Awelo',
                    'caption' => 'Community and technical dialogue',
                ],
                [
                    'image' => 'images/pilots/siaya/awelo-04-seminar.png',
                    'alt' => 'Seminar room with participants in Awelo, Siaya County',
                    'caption' => 'Seminar and capacity building',
                ],
                [
                    'image' => 'images/pilots/siaya/awelo-05-discussion.png',
                    'alt' => 'Discussion during a workshop in Awelo',
                    'caption' => 'Participatory discussion',
                ],
            ],
            'content_sections' => [
                [
                    'title' => 'Awelo in context',
                    'paragraphs' => [
                        'Awelo is one of the pilot settlements under the Kenya Informal Settlements Redevelopment Programme (KISRP) in Siaya County. The site is part of a wider effort to demonstrate how informal settlements can move toward safer housing, clearer planning, and more reliable services—while keeping residents at the centre of decisions that affect their lives.',
                        'Work in Siaya is implemented in coordination with county institutions and national programme structures, so that local priorities are reflected in technical plans and in the sequencing of investments.',
                    ],
                ],
                [
                    'title' => 'What we are doing here',
                    'paragraphs' => [
                        'Activities in Awelo follow KISRP’s integrated approach: strengthening community organisation, improving the evidence base through surveys and mapping, supporting settlement-level planning, and preparing the ground for tenure-related processes and infrastructure delivery.',
                        'The pilot is not a single project in isolation—it is intended to generate approaches that can be refined and, where appropriate, adapted for other settlements.',
                    ],
                ],
                [
                    'title' => 'Community engagement and capacity building',
                    'paragraphs' => [
                        'Workshops, seminars, and facilitated discussions help structure how residents, community leaders, and technical teams share information and resolve questions together. Training and dialogue sessions aim to build shared understanding of programme objectives, timelines, and how community feedback is used.',
                        'Inclusive engagement is emphasised so that women, youth, elderly residents, persons with disabilities, and other groups can participate meaningfully in planning and implementation-related processes.',
                    ],
                ],
                [
                    'title' => 'Data, mapping, and planning',
                    'paragraphs' => [
                        'Settlement diagnostics combine household-level information with spatial analysis so that priorities—such as access routes, drainage, water and sanitation, and environmental risks—can be discussed with a common set of facts.',
                        'Maps and technical sessions support transparent conversation about options and trade-offs. Outputs are intended to align with county planning frameworks and to feed into implementable upgrading plans as the programme moves through its phases.',
                    ],
                ],
                [
                    'title' => 'Partnership and the way forward',
                    'paragraphs' => [
                        'Implementation relies on collaboration between the national government, Siaya County, development partners, and community structures. Clear roles, regular coordination, and accessible communication help keep activities aligned with policy and with conditions on the ground.',
                        'As preparatory work progresses, the programme will continue to prioritise accountability to residents, sound technical standards, and environmental resilience. Updates on milestones and public information will be shared through official channels as they are approved.',
                    ],
                ],
            ],
        ],
        [
            'slug' => 'kajiado',
            'settlement' => 'Mathare',
            'area_name' => 'Umoja settlement',
            'county' => 'Kajiado',
            'summary' => 'KISRP activities in Kajiado County focus on the Umoja settlement in Mathare—linking participatory planning, technical diagnostics, and on-site engagement with county and national partners.',
            'planning_map_image' => 'images/maps/mathare-umoja-local-area-plan.png',
            'planning_map_alt' => 'GIS map: Mathare Umoja proposed local area development plan, Kajiado County',
            'hero_image' => 'images/pilots/kajiado/umoja-01-boardroom.png',
            'gallery' => [
                [
                    'image' => 'images/pilots/kajiado/umoja-01-boardroom.png',
                    'alt' => 'Stakeholders in a boardroom meeting for Mathare Umoja, Kajiado County',
                    'caption' => 'Coordination and planning session',
                ],
                [
                    'image' => 'images/pilots/kajiado/umoja-02-workshop.png',
                    'alt' => 'Workshop with projector and laptops in Mathare Umoja, Kajiado County',
                    'caption' => 'Technical workshop and dialogue',
                ],
                [
                    'image' => 'images/pilots/kajiado/umoja-03-plenary.png',
                    'alt' => 'Plenary discussion with participants seated around tables in Mathare Umoja, Kajiado County',
                    'caption' => 'Plenary and community engagement',
                ],
                [
                    'image' => 'images/pilots/kajiado/umoja-04-settlement-map.png',
                    'alt' => 'Team reviewing the Umoja settlement map on site in Mathare, Kajiado County',
                    'caption' => 'On-site review of settlement plans',
                ],
                [
                    'image' => 'images/pilots/kajiado/umoja-05-site-visit.png',
                    'alt' => 'Site visit in Umoja settlement with programme team, Kajiado County',
                    'caption' => 'Settlement walk-through and diagnostics',
                ],
                [
                    'image' => 'images/pilots/kajiado/umoja-06-street-walk.png',
                    'alt' => 'Team walking through Mathare Umoja neighbourhood streets, Kajiado County',
                    'caption' => 'Neighbourhood context and access',
                ],
            ],
            'content_sections' => [
                [
                    'title' => 'Umoja settlement in Mathare, Kajiado County',
                    'paragraphs' => [
                        'The Kajiado County pilot under KISRP includes work in the Umoja settlement in Mathare. Activities combine community participation with sound technical analysis so that upgrading options reflect how people live, move, and access services.',
                        'Implementation is aligned with Kajiado County institutions and national programme structures, with attention to access routes, shelter conditions, and service gaps identified together with residents.',
                    ],
                ],
                [
                    'title' => 'Meetings, workshops, and joint planning',
                    'paragraphs' => [
                        'Indoor sessions support structured discussion among residents, community structures, county representatives, and technical teams. These forums are used to share information, clarify programme phases, and agree on practical next steps.',
                        'Workshops with maps, data, and digital tools help translate field observations into plans that can be reviewed transparently and revised as new information emerges.',
                    ],
                ],
                [
                    'title' => 'Field visits and settlement diagnostics',
                    'paragraphs' => [
                        'Walk-throughs and on-site reviews complement desk-based planning. Teams examine access, shelter conditions, environmental risks, and service gaps together with residents—building a shared picture of priorities.',
                        'Safety vests and visible programme identification support orderly site activities and make it easier for community members to recognise official engagements linked to KISRP.',
                    ],
                ],
                [
                    'title' => 'Partnership and communication',
                    'paragraphs' => [
                        'Mathare Umoja work in Kajiado involves collaboration between national agencies, the county, development partners, and local leadership. Clear communication reduces duplication and helps residents understand how to engage constructively.',
                        'Official updates, captions, and public messaging for this page should be confirmed by your communications team before wider release.',
                    ],
                ],
            ],
        ],
        [
            'slug' => 'kilifi',
            'settlement' => 'Prison Kiwandani',
            'county' => 'Kilifi',
            'summary' => 'Prison Kiwandani in Kilifi County is a KISRP pilot where structured planning, land-use zoning, and settlement diagnostics come together with county systems—so that tenure, services, and upgrading options can be discussed with residents and partners on a clear technical basis.',
            'planning_map_image' => 'images/maps/kilifi-prison-kiwandani-existing-structures.png',
            'planning_map_alt' => 'GIS map: Prison Kiwandani distribution of existing structures, Kilifi County',
            'hero_image' => 'images/pilots/kilifi/hero-site-visit.png',
            'gallery' => [
                [
                    'image' => 'images/pilots/kilifi/hero-site-visit.png',
                    'alt' => 'KISRP team and partners on a site visit at Prison Kiwandani, Kilifi County, with maps and safety vests',
                    'caption' => 'Site visit and field coordination',
                ],
                [
                    'image' => 'images/maps/kilifi-prison-kiwandani-land-use-plan.png',
                    'alt' => 'GIS map: proposed Prison Kiwandani draft land use plan with zoning and roads, Kilifi County',
                    'caption' => 'Draft land use plan (1:2,000)',
                ],
            ],
            'content_sections' => [
                [
                    'title' => 'Prison Kiwandani in Kilifi County',
                    'paragraphs' => [
                        'The Prison Kiwandani pilot sits within Kilifi County’s urban and institutional context, adjacent to areas that include Kilifi Prison and neighbouring communities. KISRP uses this site to demonstrate how informal and dense settlement areas can be described through surveys, GIS, and participatory planning—without losing sight of security, access, and service delivery.',
                        'Work is coordinated with Kilifi County and national programme structures so that local plans can align with county spatial frameworks, environmental requirements, and investment sequencing.',
                    ],
                ],
                [
                    'title' => 'What the programme is doing on site',
                    'paragraphs' => [
                        'Activities include community and stakeholder engagement, field verification, and preparation of technical drawings that translate ground conditions into maps everyone can discuss. Site visits—such as the coordination shown in programme photography—help align teams around the same facts before decisions are taken.',
                        'Outputs are intended to support dialogue on tenure pathways, infrastructure priorities, and how upgrading can improve safety, health, and livelihoods over time.',
                    ],
                ],
                [
                    'title' => 'Land use in the draft plan',
                    'paragraphs' => [
                        'The **proposed draft land use plan** (scale 1:2,000) organises the surveyed area into a network of roads and small parcels with distinct zoning. **Residential** use (brown) forms the bulk of the interior blocks, reflecting the need for adequate housing plots within a compact layout.',
                        '**Commercial** parcels (red) are placed along the wider corridors—particularly the **20 m** and **12 m** roads—so that shops and services can sit where movement and visibility are strongest, while **9 m** roads provide access inside residential super-blocks.',
                    ],
                ],
                [
                    'title' => 'Institutions, services, and context',
                    'paragraphs' => [
                        '**Institutional** zones (yellow) reserve space for social infrastructure—for example proposed schools and an **Early Childhood Development (ECD)** facility—so that education and childcare are embedded in the plan rather than added as an afterthought.',
                        'Symbols such as **waste transfer stations** (orange hatched) point to how solid waste could be managed at neighbourhood scale. Large **surveyed** or buffer areas and the label **Kilifi Prison** remind readers that the plan must be read alongside institutional land, security considerations, and county approvals—not as a final cadastral outcome until statutory processes are completed.',
                    ],
                ],
                [
                    'title' => 'How to read the maps on this page',
                    'paragraphs' => [
                        'The gallery at the top of this page includes the **site visit** image and the **draft land use** sheet. Together they connect “people in the place” with the technical zoning diagram. A companion **existing structures** map (also on the Planning maps page) shows today’s building footprints and surveyed perimeter for comparison.',
                        'For full-size views and line-by-line explainers, open the **Planning maps** section. All captions and legal descriptions should be confirmed by your communications and county planning teams before public circulation.',
                    ],
                ],
            ],
        ],
    ],

    /*
    | Programme approach page — intro paragraphs (shown above phase accordion)
    */
    'approach_intro' => [
        'KISRP follows an **integrated sequence** of steps so that each stage creates the conditions for the next: from community readiness and trusted data, through participatory planning and tenure processes, to infrastructure, housing, and longer-term settlement upgrading.',
        'The outline below is **indicative**. Timing, emphasis, and legal pathways vary by settlement, **county capacity**, available financing, and national policy. The constant threads are **participation**, transparency, and alignment between residents, community structures, county government, and national programme institutions.',
    ],

    'phases' => [
        [
            'title' => 'Community mobilization & institutional setup',
            'summary' => 'Strengthening governance structures, capacity, and grievance mechanisms.',
            'paragraphs' => [
                'KISRP begins by strengthening **community organisation** and clarifying how residents, community structures, and county teams will work together. Sensitisation and dialogue help align expectations with what the programme can deliver—and what must be handled through other government channels.',
                'This stage also reinforces **governance and accountability**: transparent communication, documented agreements where appropriate, and **grievance or feedback mechanisms** so concerns can be raised and tracked. Capacity support may cover facilitation, record-keeping, and inclusion of women, youth, and vulnerable households.',
                'National and county **institutional arrangements** are aligned so that decisions taken at settlement level can connect to county plans, budgets, and sector agencies without losing community ownership.',
            ],
        ],
        [
            'title' => 'Data collection & settlement diagnostics',
            'summary' => 'Surveys, enumeration, GIS mapping, and infrastructure assessments.',
            'paragraphs' => [
                'A shared **evidence base** is built through structured **enumeration**, surveys, and field verification. Information typically covers households, structures, access routes, and service points—always subject to ethical use, data protection, and programme protocols.',
                '**GIS mapping** and technical drawings translate ground conditions into maps that everyone can discuss: existing layouts, constraints, environmental risks, and options for reorganising space over time.',
                '**Settlement diagnostics** summarise findings—density, infrastructure gaps, tenure-related issues, and social dynamics—so that later planning and investment choices are grounded in facts rather than assumptions.',
            ],
        ],
        [
            'title' => 'Planning & tenure regularization',
            'summary' => 'Physical plans, demarcation, adjudication, and tenure frameworks.',
            'paragraphs' => [
                'Participatory processes produce **physical and land-use plans** that reflect community priorities and county spatial policy. Scenarios may cover road hierarchies, open space, social facilities, and phasing of change so disruption is managed.',
                '**Demarcation, adjudication, and documentation** pathways are pursued where the programme and county frameworks allow—always within the law and with clear communication about rights, obligations, and timelines.',
                'Outputs are designed to feed **implementable upgrading packages**: what can be built first, what requires further legal or technical steps, and how plans stay consistent with infrastructure and housing stages that follow.',
            ],
        ],
        [
            'title' => 'Infrastructure & service delivery',
            'summary' => 'Roads, drainage, water, sanitation, and public environment improvements.',
            'paragraphs' => [
                'Priority works typically address **access, drainage, water, sanitation, solid waste, and public lighting**—chosen through technical assessment and agreement with communities and counties. Designs aim for durability, maintenance responsibility, and climate-conscious choices where possible.',
                'Coordination with **utilities and sector agencies** reduces duplication and helps connect informal areas to formal service networks where feasible.',
                'Construction and supervision follow agreed standards; communities are kept informed on **progress, safety, and any temporary disruption**, so infrastructure gains legitimacy and is easier to maintain after handover.',
            ],
        ],
        [
            'title' => 'Housing & settlement upgrading',
            'summary' => 'Incremental housing, affordable options, and links to national housing programmes.',
            'paragraphs' => [
                'The programme supports **incremental and affordable housing** options suited to resident incomes—ranging from improved shelter conditions to structured redevelopment where plans and tenure steps allow. Links to **national housing and finance programmes** are explored where they add value.',
                'Upgrading is treated as a **long-term process**: livelihoods, rental markets, and social networks are considered so that physical change does not displace households without viable alternatives.',
                'Learning from pilots is captured to **refine methods** for other settlements, while monitoring tracks outcomes across tenure security, services, and quality of life.',
            ],
        ],
    ],

    'activity_pillars' => [
        [
            'title' => 'Community engagement',
            'body' => 'Sensitization, participatory planning, and leadership training—with attention to vulnerable groups.',
            'image' => 'images/pilots/siaya/awelo-05-discussion.png',
            'image_alt' => 'Community members in a participatory discussion during a KISRP workshop',
        ],
        [
            'title' => 'Data & planning',
            'body' => 'Enumeration, GIS mapping, and upgrading plans grounded in settlement diagnostics.',
            'image' => 'images/pilots/siaya/awelo-02-mapping.png',
            'image_alt' => 'Facilitator presenting mapping and spatial data for settlement planning',
        ],
        [
            'title' => 'Land & tenure',
            'body' => 'Verification, demarcation, allocation, and documentation pathways.',
            'image' => 'images/pilots/kajiado/umoja-04-settlement-map.png',
            'image_alt' => 'Team reviewing the Umoja settlement plan on site in Mathare, Kajiado County',
        ],
        [
            'title' => 'Infrastructure',
            'body' => 'Access, drainage, water and sanitation, and climate-conscious design.',
            'image' => 'images/pilots/kajiado/umoja-05-site-visit.png',
            'image_alt' => 'Programme site visit through narrow access routes in an informal settlement',
        ],
        ['title' => 'Coordination', 'body' => 'National–county alignment, partners, and programme monitoring.'],
    ],

    /*
    | Planning / GIS map gallery (public/images/maps/)
    */
    'gis_maps' => [
        'intro' => [
            'title' => 'Pilot site planning maps',
            'lead' => 'These maps illustrate how settlement diagnostics and planning outputs are used to support transparent, evidence-based dialogue with communities and county teams. They complement field surveys, enumeration, and engineering work carried out under KISRP.',
            'note' => 'Maps are programme working materials for orientation; final layouts, approvals, and public releases are governed by county planning processes and official communications.',
        ],
        'sites' => [
            [
                'anchor' => 'awelo-siaya',
                'pilot_slug' => 'siaya',
                'settlement' => 'Awelo',
                'county' => 'Siaya',
                'intro' => 'Siaya County — Awelo special planning area: parcels, structures, and the outer planning boundary.',
                'maps' => [
                    [
                        'title' => 'Awelo Special Planning Area',
                        'image' => 'images/maps/awelo-special-planning-area.png',
                        'alt' => 'GIS map titled Awelo Special Planning Area showing parcels, structures, and planning boundary in Siaya County',
                        'explainers' => [
                            'The **planning boundary** (red outline) defines the study area. Inside it, **parcels** appear as outlined plots; **structures** are shown as grey footprints where buildings exist today.',
                            'Labels such as the Chief’s Office and parcel numbers support discussion on access, consolidation, and future upgrading. The grid, scale bar, and coordinates allow technical checks against field surveys.',
                        ],
                    ],
                ],
            ],
            [
                'anchor' => 'mathare-umoja-kajiado',
                'pilot_slug' => 'kajiado',
                'settlement' => 'Mathare (Umoja)',
                'county' => 'Kajiado',
                'intro' => 'Kajiado County — Mathare Umoja local area development plan: existing blocks, riparian reserve, and proposed formal layout.',
                'maps' => [
                    [
                        'title' => 'Mathare Umoja — proposed local area development plan',
                        'image' => 'images/maps/mathare-umoja-local-area-plan.png',
                        'alt' => 'GIS map titled Mathare Umoja proposed local area development plan at 1:500 scale, Kajiado County',
                        'explainers' => [
                            '**Existing built-up areas** (Blocks 1–3, grey) show current dense development. A **riparian reserve** (light green) marks a protected corridor—typically along a watercourse—between existing settlement and new layout.',
                            '**Proposed blocks** to the east are drawn as regular plots, illustrating how structured expansion or formalisation could relate to access and services. Other symbols (e.g. dumpsite, boundary line) should be read together with environmental and engineering assessments.',
                        ],
                    ],
                ],
            ],
            [
                'anchor' => 'prison-kiwandani-kilifi',
                'pilot_slug' => 'kilifi',
                'settlement' => 'Prison Kiwandani',
                'county' => 'Kilifi',
                'intro' => 'Kilifi County — Prison Kiwandani: existing structure survey and draft land-use plan (1:2,000).',
                'maps' => [
                    [
                        'title' => 'Distribution of existing structures',
                        'image' => 'images/maps/kilifi-prison-kiwandani-existing-structures.png',
                        'alt' => 'GIS map of Prison Kiwandani showing distribution of existing structures and surveyed perimeter, Kilifi County',
                        'explainers' => [
                            'The **surveyed perimeter** (green boundary) frames the pilot area. **Buildings** are shown as dense grey footprints; **institutional** zones (yellow) mark larger non-residential uses. **Surveyed parcels** (pink hatch) highlight plots already subject to detailed survey.',
                            'Context labels such as Kilifi Prison and neighbouring areas orient the site. Scale (1:2,000), north arrow, and coordinate reference support integration with wider county GIS.',
                        ],
                    ],
                    [
                        'title' => 'Proposed draft land use plan',
                        'image' => 'images/maps/kilifi-prison-kiwandani-land-use-plan.png',
                        'alt' => 'GIS map titled proposed Prison Kiwandani draft land use plan with roads and zoning, Kilifi County',
                        'explainers' => [
                            'The draft plan shows a **road hierarchy** (e.g. 20 m, 12 m, 9 m) and **zoning**: commercial (red) along main corridors, residential (brown) in blocks, and institutional (yellow) for schools and proposed ECD.',
                            '**Surveyed parcels** and utility symbols (e.g. waste transfer) illustrate how services and plot layouts could evolve. The plan is a technical basis for discussion—not a final cadastral document until adopted through statutory processes.',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'contact' => [
        'phone' => '+254 020 2713833',
        'email' => env('KISRP_CONTACT_EMAIL', 'kisrip.pm@gmail.com'),
        'website_url' => 'https://www.kisrp.co.ke',
        'website_display' => 'www.kisrp.co.ke',
    ],

    /*
    | Partners page — programme funding (Italian cooperation, budget, implementation)
    */
    'partners_funding' => [
        'title' => 'Programme Funding',
        'kicker' => 'Your update on settlements, tenure & community action',
        'paragraphs' => [
            'Financed by the **Italian Government** through **AICS** — the Italian Agency for Development Cooperation.',
            '**Programme budget:** €6,000,000 (approximately KSh 750 million).',
            '**KISRP** is implemented by the State Department for Housing and Urban Development alongside county teams on the ground.',
        ],
    ],

];
